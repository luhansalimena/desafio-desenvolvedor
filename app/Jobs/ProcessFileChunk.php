<?php

namespace App\Jobs;

use App\Models\Asset;
use App\Repositories\AssetRepository;
use App\Repositories\Interface\AssetRepositoryInterface;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Queue\Queueable;

class ProcessFileChunk implements ShouldQueue
{
    use Queueable;

    public array $data;
    protected AssetRepositoryInterface $assetRepositoryInterface;

    /**
     * Create a new job instance.
     */
    public function __construct(array $data)
    {
        $this->data = $data;
        $this->assetRepositoryInterface = app(AssetRepositoryInterface::class);
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->assetRepositoryInterface->insert($this->data);
    }
}
