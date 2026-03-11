<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.details');
Route::fallback(function () {
    return view('errors.not-found');
});
Route::prefix('articles')->group(function () {
    Route::get('/creer', [ArticleController::class, 'create']);
    Route::get('/modifier/{id}', [ArticleController::class, 'edit']);
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete']);
});