<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\Auth\LoginController;



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

// auth
Auth::routes();
// Route::get('logout', [LoginController::class, 'logout']);

// routes
Route::get('/', [PostController::class, 'index']);

// posts
Route::resource('posts', PostController::class);

// comments
Route::resource('comments', CommentController::class)->only([
    'store', 'update', 'destroy'
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

