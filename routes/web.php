<?php

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

Route::get('/', [\App\Http\Controllers\PostsController::class,"index"])
->name('posts.index');

Route::get('/posts/{post}', [\App\Http\Controllers\PostsController::class, 'show'])
->name('posts.show');

Route::get('ajax/categories/{category}', [\App\Http\Controllers\PostsController::class, 'ajaxCategory'])
->name('categories.index');

Route::get('/ajax/more', [\App\Http\Controllers\PostsController::class, 'more'])
->name('ajax.more');

Route::get('/ajax/comments', [\App\Http\Controllers\CommentsController::class, 'addComment'])
->name('ajax.addComment');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

