<?php
namespace App\Actions\File;

use App\Repositories\Interface\FileRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\UploadedFile;

class SearchFiles
{
    protected FileRepositoryInterface $fileRepository;

    public function __construct(FileRepositoryInterface $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    public function handle(array $searchParams): Collection
    {
        return $this->fileRepository->search($searchParams);
    }
}
