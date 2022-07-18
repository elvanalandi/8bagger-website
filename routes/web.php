<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\GoogleController;
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

Route::get('/', [PagesController::class, 'index']);

Route::get('/blog', [PagesController::class, 'blog']);

Route::get('/class', [PagesController::class, 'class'])->name('class');

Route::get('/blog/detail', [PagesController::class, 'detail']);

Route::get('/blog', [ArticleController::class, 'getBlog']);

Route::get('/blog/{type}', [ArticleController::class, 'getBlogType']);

Route::get('/blog/detail/{id}', [ArticleController::class, 'getDetailBlog']);

Route::get('/', [ArticleController::class, 'getLatestBlog']);

//Classes
Route::get('/class', [ClassController::class, 'getClass']);

// Comments
Route::post('/blog/detail/{blog_id}/comment',[CommentsController::class, 'store'])->name('comments.store');

Auth::routes();

