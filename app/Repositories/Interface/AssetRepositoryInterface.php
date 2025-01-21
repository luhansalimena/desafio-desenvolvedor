<?php

namespace App\Repositories\Interface;


interface AssetRepositoryInterface
{
    public function insert(array $data): bool;
}
