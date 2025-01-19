<?php

namespace App\Repositories\Interface;

use File;

interface FileRepositoryInterface
{
    public function store(array $data): File;
}
