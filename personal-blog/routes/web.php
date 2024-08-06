<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Routes Article for show article to all users
Route::get('/', 'App\Http\Controllers\ArticleController@index')
    ->name('home');

Route::resource('/article', ArticleController::class)
    ->only(['show']);

// Routes group for middleware auth user
Route::middleware('auth')->group(function () {
    Route::resources([
        'article' => ArticleController::class,
        'tag' => TagController::class,
        'category' => CategoryController::class,
    ],
        [
            'except' => ['index', 'show']
        ]);
});
// Route single page view about me
Route::view('/aboutme', 'aboutMe')
    ->name('aboutme');

require __DIR__ . '/auth.php';
