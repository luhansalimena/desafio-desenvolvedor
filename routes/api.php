<?php

use App\Http\Controllers\AssetController;
use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;

Route::post('upload', [FileController::class, 'upload']);

Route::get('files', [FileController::class, 'index']);

Route::get('assets', [AssetController::class, 'index']);
