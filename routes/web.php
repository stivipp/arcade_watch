<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
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

// auth
Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

// routes
Route::get('/', [PostController::class, 'index']);

// posts
Route::resource('posts', PostController::class);


