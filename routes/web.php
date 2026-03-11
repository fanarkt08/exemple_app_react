<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticleController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('articles')->name('articles.')->group(function () {

    Route::get('/creer', [ArticleController::class, 'create'])->name('create');
    Route::get('/modifier/{id}', [ArticleController::class, 'edit'])->name('edit');
    Route::get('/supprimer/{id}', [ArticleController::class, 'delete'])->name('delete');
    Route::get('/{id}', [ArticleController::class, 'show'])->name('details');

});

Route::fallback(function () {
    return view('errors.not-found');
});