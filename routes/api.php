<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Article;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\ArticleController;


Route::get('articles/{article}', [ArticleController::class, 'show']);
Route::post('articles', [ArticleController::class, 'store']);
Route::put('articles/{article}', [ArticleController::class, 'update']);
Route::delete('articles/{article}', [ArticleController::class, 'delete']);


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/me', [AuthController::class, 'me']);
    Route::get('/articles', [ArticleController::class, 'index']);
    Route::get('/logout', [AuthController::class, 'logout']);
});