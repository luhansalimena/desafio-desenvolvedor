<?php

namespace App\Repositories;

use App\Models\File;
use App\Repositories\Interface\FileRepositoryInterface;

class FileRepository implements FileRepositoryInterface
{
    public function store(array $data): File
    {
        return File::create($data);
    }
}
