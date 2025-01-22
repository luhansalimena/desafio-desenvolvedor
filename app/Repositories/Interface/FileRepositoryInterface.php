<?php

namespace App\Repositories\Interface;

use App\Models\File;
use Illuminate\Database\Eloquent\Collection;

interface FileRepositoryInterface
{
    public function store(array $data): File;
    public function search(array $searchParams): Collection;
}
