<?php

use App\Http\Controllers\Api\DiskController;
use App\Http\Controllers\Api\FileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return response()->json([
        'message' => 'Hello from storage-api',
    ]);
});

Route::get('disks', [DiskController::class, 'index']);
Route::get('files', [FileController::class, 'index']);
Route::get('disks/{disk}', [DiskController::class, 'show']);
Route::post('disks', [DiskController::class, 'store']);

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
