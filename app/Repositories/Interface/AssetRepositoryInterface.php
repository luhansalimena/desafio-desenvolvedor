<?php

namespace App\Repositories\Interface;

use Illuminate\Pagination\LengthAwarePaginator;


interface AssetRepositoryInterface
{
    public function insert(array $data): bool;
    public function search(array $searchParams): LengthAwarePaginator;
}
