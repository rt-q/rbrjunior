<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/posts', [PostController::class, 'index'])->name('posts.index')->middleware('auth');;
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index')->middleware('auth');;
Route::get('/users', [UserController::class, 'index'])->name('users.index')->middleware('auth');;

Route::get('/api', [ApiController::class, 'index'])->name('api.index')->middleware('auth');
Route::get('/api/newpost', [ApiController::class, 'newPostIndex'])->name('api.newpost')->middleware('auth');
Route::post('/api/newpost', [ApiController::class, 'newPost'])->name('api.newpost.store')->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
