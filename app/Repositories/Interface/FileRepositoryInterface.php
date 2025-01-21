<?php

namespace App\Repositories\Interface;

use App\Models\File;

interface FileRepositoryInterface
{
    public function store(array $data): File;
}
