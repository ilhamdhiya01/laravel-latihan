<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\SubjectsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('posts',PostsController::class);
// route redirect
// Route::redirect('posts', 'articles');
// Route::get('articles', fn () => 'Fetch all articles');
// 
Route::resource('users',UsersController::class);
Route::resource('subjects',SubjectsController::class);
// Route::middleware('auth')->group(function() {
//     Route::get('', [PostController::class, 'index'])->name('index')->withoutMiddleware('auth');
//     Route::get('/create', [PostController::class, 'create'])->name('create');
//     Route::get('{show}', [PostController::class, 'show'])->name('show')->withoutMiddleware('auth');
//     Route::post('', [PostController::class, 'store'])->name('store');
//     Route::get('/{post}/edit', [PostController::class, 'edit'])->name('edit');
//     Route::put('/{post}/update', [PostController::class, 'update'])->name('update');
//     Route::delete('/{post}/delete', [PostController::class, 'destroy'])->name('delete');
// });