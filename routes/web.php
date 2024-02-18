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

Route::get('/', [ArticleController::class, 'home'])->name('home');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/articles/create', [ArticleController::class, 'vaiAForm'])->name('articles.create');

Route::post("/invio", [ArticleController::class, "store"])->name("invio");



Route::middleware('auth')->group(function() {
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'vaiAForm'])->name('articles.create');
    Route::post("/invio", [ArticleController::class, "store"])->name("invio");
});





Route::middleware('auth')->group(function() {
    Route::resource('categories', CategoryController::class);
});



