<?php

namespace App\Repositories;

use App\Models\Asset;
use App\Repositories\Interface\AssetRepositoryInterface;

class AssetRepository implements AssetRepositoryInterface
{
    public function insert(array $data): bool
    {
        return Asset::insert($data);
    }
}
