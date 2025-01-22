<?php

namespace App\Http\Controllers;

use App\Actions\File\HandleUploadedFile;
use App\Actions\File\SearchFiles;
use App\Http\Requests\FileUploadRequest;
use App\Http\Requests\SearchFilesRequest;

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
        $handleUploadedFile->handle($request->file('file'), $request->fileHash);
        return response()->json([
            'message' => 'File uploaded successfully',
        ]);
    }

    /**
     * @OA\Get(
     *     path="/api/files",
     *     summary="Get list of all files",
     *     description="Returns a list of all uploaded files",
     *     operationId="getFiles",
     *     tags={"File"},
     *     @OA\Parameter(
     *         name="name",
     *         in="query",
     *         required=false,
     *         @OA\Schema(
     *             type="string"
     *         ),
     *         description="Filter files by name"
     *     ),
     *     @OA\Parameter(
     *         name="created_at",
     *         in="query",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *             format="date-time"
     *         ),
     *         description="Filter files by creation date"
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Successful operation",
     *         @OA\JsonContent(
     *             type="object",
     *             @OA\Property(
     *                 property="files",
     *                 type="array",
     *                 @OA\Items(
     *                     type="object",
     *                     @OA\Property(property="id", type="integer", example=1),
     *                     @OA\Property(property="name", type="string", example="document.pdf"),
     *                     @OA\Property(property="path", type="string", example="/storage/uploads/document.pdf"),
     *                     @OA\Property(property="created_at", type="string", format="date-time"),
     *                     @OA\Property(property="updated_at", type="string", format="date-time")
     *                 )
     *             )
     *         )
     *     )
     * )
     */
    public function index(SearchFilesRequest $request, SearchFiles $searchFiles)
    {
        return $searchFiles->handle($request->validated());
    }
}
