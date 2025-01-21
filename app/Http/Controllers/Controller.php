<?php

namespace App\Http\Controllers;

abstract class Controller
{
    /**
     * @OA\Info(
     *     version="1.0.0",
     *     title="Financial Data API",
     *     description="API for handling file uploads"
     * )
     **/
    public function __construct()
    {
        //
    }
}
