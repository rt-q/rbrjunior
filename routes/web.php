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

Route::get('/api/docs', [ApiController::class, 'documentation'])->name('api.documentation')->middleware('auth');

Route::get('/api/newpost', [ApiController::class, 'newPostIndex'])->name('api.newpost')->middleware('auth');
Route::post('/api/newpost', [ApiController::class, 'newPost'])->name('api.newpost.store')->middleware('auth');

Route::get('/api/comments', [ApiController::class, 'indexComments'])->name('api.comments')->middleware('auth');
Route::get('/api/newcomment', [ApiController::class, 'newCommentIndex'])->name('api.newcomment')->middleware('auth');
Route::post('/api/newcomment', [ApiController::class, 'newComment'])->name('api.newcomment.store')->middleware('auth');

Route::get('/api/deletecomment', [ApiController::class, 'deleteCommentIndex'])->name('api.deletecomment')->middleware('auth');
Route::post('/api/deletecomment', [ApiController::class, 'deleteComment'])->name('api.deletecomment.rmv')->middleware('auth');

Route::get('/api/deletepost', [ApiController::class, 'deletePostIndex'])->name('api.deletepost')->middleware('auth');
Route::post('/api/deletepost', [ApiController::class, 'deletePost'])->name('api.deletepost.rmv')->middleware('auth');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
