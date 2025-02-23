<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');

Route::get('/form', [CategoriesController::class, 'index'])->name('articles.form');

Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');

Route::delete('/articles/{article}', [ArticleController::class, 'destroy'])->name('articles.destroy');

Route::get('/articles/{article}/edit', [ArticleController::class, 'edit'])->name('articles.edit');

Route::put('/articles/{article}', [ArticleController::class, 'update'])->name('articles.update');


Route::patch('/articles/{article}/toggle-status', [ArticleController::class, 'toggleStatus'])->name('articles.toggle-status');
