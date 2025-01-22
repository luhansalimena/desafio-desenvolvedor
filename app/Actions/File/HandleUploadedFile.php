<?php
namespace App\Actions\File;

use App\FileHeaders;
use App\Jobs\ProcessFileChunk;
use App\Repositories\Interface\FileRepositoryInterface;
use Illuminate\Cache\Lock;
use League\Csv\ResultSet;
use League\Csv\Statement;
use Illuminate\Http\UploadedFile;
use League\Csv\Reader;

class HandleUploadedFile
{
    protected FileRepositoryInterface $fileRepository;

    public function __construct(FileRepositoryInterface $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    public function handle(UploadedFile $file, string $fileHash)
    {
        $lock = $this->setLock($fileHash, $file);

        try {
            $csv = $this->readCsv($file);
        } catch (\Exception $e) {
            throw new \RuntimeException('Failed to read the CSV file: ' . $e->getMessage());
        }

        $records = $this->getRecords($csv);
        $chunks = array_chunk(iterator_to_array($records), 100);

        foreach ($chunks as $chunk) {
            ProcessFileChunk::dispatch($chunk);
        }

        $this->fileRepository->store([
            'fileHash' => $fileHash,
            'name' => $file->getClientOriginalName(),
        ]);

        return $file;
    }

    protected function readCsv(UploadedFile $file): ResultSet
    {
        return Reader::createFromPath($file->getRealPath(), 'r')
            ->setDelimiter(';')
            ->setHeaderOffset(1)
            ->mapHeader(array_column(FileHeaders::cases(), 'name'));
    }

    protected function getRecords($csv): \Iterator
    {
        $stmt = Statement::create()
        ->offset(1);

        return $stmt->process($csv)->getRecords();
    }

    protected function setLock($fileHash, $file): Lock
    {
        return cache()->lock($fileHash, 1);
    }

    protected function releaseLock($lock): void
    {
        $lock->release();
    }

    protected function readFile($file): array
    {
        return $file->get();
    }
}
