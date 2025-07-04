<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

Route::prefix('articles')->group(function () {
    Route::middleware(['throttle:60,1'])->group(function () {
        Route::get('/', [ArticleController::class, 'index']);
        Route::get('/{id}', [ArticleController::class, 'show']);
    });
});