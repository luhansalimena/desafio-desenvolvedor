<?php
namespace App\Actions\Asset;

use App\Repositories\Interface\AssetRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchAssets
{
    protected AssetRepositoryInterface $assetRepository;

    public function __construct(AssetRepositoryInterface $assetRepository)
    {
        $this->assetRepository = $assetRepository;
    }

    public function handle(array $searchParams): LengthAwarePaginator
    {
        return $this->assetRepository->search($searchParams);
    }
}
