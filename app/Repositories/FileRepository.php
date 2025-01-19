<?php

namespace App\Repositories;

use App\Repositories\Interface\FileRepositoryInterface;
use File;

class FileRepository implements FileRepositoryInterface
{
    public function store(array $data): File
    {
        return File::create($data);
    }
}
