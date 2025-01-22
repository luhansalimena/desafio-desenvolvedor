<?php

namespace App\Repositories;

use App\Models\File;
use App\Repositories\Interface\FileRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class FileRepository implements FileRepositoryInterface
{
    public function store(array $data): File
    {
        return File::create($data);
    }

    public function search(array $searchParams): Collection
    {
        $query = File::query();

        if(data_get($searchParams, 'name')) {
            $query->where('name', 'like', '%' . data_get($searchParams, 'name') . '%');
        }

        if(data_get($searchParams, 'created_at')) {
            $query->whereDate('created_at', data_get($searchParams, 'created_at'));
        }


        return $query->get();
    }
}
