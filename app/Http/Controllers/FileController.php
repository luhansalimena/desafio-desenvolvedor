<?php

namespace App\Http\Controllers;

use App\Actions\File\HandleUploadedFile;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function upload(FileUploadRequest $request, HandleUploadedFile $handleUploadedFile)
    {
        return $handleUploadedFile->handle($request->file('file'), $request->fileHash);
    }
}
