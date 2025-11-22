<?php

use App\Http\Controllers\Api\BlogController;

Route::prefix('v1')->group(function () {
    Route::post('/blogs', [BlogController::class, 'store']);
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/blogs/{blog:slug}', [BlogController::class, 'show']);
    Route::put('/blogs/{blog:slug}', [BlogController::class, 'update']);
    Route::delete('/blogs/{blog:slug}', [BlogController::class, 'destroy']);
});