<?php

namespace App\Http\Controllers;

use App\Actions\File\HandleUploadedFile;
use App\Http\Requests\FileUploadRequest;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/upload",
     *     summary="Upload a file",
     *     tags={"File"},
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="multipart/form-data",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="file",
     *                     type="string",
     *                     format="binary",
     *                     description="File to upload"
     *                 )
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="File uploaded successfully",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="File uploaded successfully"),
     *             @OA\Property(property="path", type="string", example="/storage/uploads/file.txt")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Validation error",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="The file field is required"),
     *             @OA\Property(property="errors", type="object", example={"file": {"The file field is required"}})
     *         )
     *
     *         )
     *     )
     * )
     */
    public function upload(FileUploadRequest $request, HandleUploadedFile $handleUploadedFile)
    {
        return $handleUploadedFile->handle($request->file('file'), $request->fileHash);
    }
}
