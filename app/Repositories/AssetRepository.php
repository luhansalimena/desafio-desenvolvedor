<?php

namespace App\Repositories;

use App\Models\Asset;
use App\Repositories\Interface\AssetRepositoryInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class AssetRepository implements AssetRepositoryInterface
{
    public function insert(array $data): bool
    {
        return Asset::insert($data);
    }

    public function search(array $searchParams): LengthAwarePaginator
    {
        $query = Asset::query();

        if(data_get($searchParams, 'TckrSymb')) {
            $query->where('TckrSymb', data_get($searchParams, 'TckrSymb'));
        }

        if(data_get($searchParams, 'RptDt')) {
            $query->where('RptDt', '=',data_get($searchParams, 'RptDt'));
        }

        return $query->paginate(100);
    }
}
