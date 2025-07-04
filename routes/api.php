<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticleController;

Route::prefix('articles')->group(function () {
    Route::get('/', [ArticleController::class, 'index']); // Get articles list
    Route::get('/{id}', [ArticleController::class, 'show']); // Single article by ID
});

Route::get('/test-newsapi', function (\App\Services\NewsApiService $service) {
    $service->fetchAndStore();
    return 'NewsAPI fetch done!';
});