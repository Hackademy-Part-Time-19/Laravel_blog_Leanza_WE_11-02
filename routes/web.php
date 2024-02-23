<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//articoli
Route::get('/', [ArticleController::class, 'home'])->name('home');
Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/category/{id}', [ArticleController::class, 'byCategory'])->name('articles.byCategory');

Route::middleware('auth')->group(function () {
    Route::get('/articles/create', [ArticleController::class, 'vaiAForm'])->name('articles.create');
    Route::post("/invio", [ArticleController::class, "store"])->name("invio");
    Route::get('/articles/{id}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{id}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/remove/{id}', [ArticleController::class, 'destroy'])->name('articles.destroy');
    

});

// categorie

Route::middleware('auth')->group(function () {
    Route::resource('categories', CategoryController::class);
});
