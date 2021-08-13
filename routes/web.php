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

Route::get(
    '/',
    [App\Http\Controllers\Shared\MainController::class, 'index']
)->name('public-main');
Route::get(
    '/author/show/{name}',
    [App\Http\Controllers\Shared\AuthorController::class, 'show']
)->name('author-show');
Route::get(
    '/post/create',
    [App\Http\Controllers\Shared\PostController::class, 'create']
)->name('post-create');
Route::get(
    '/post/store',
    [App\Http\Controllers\Shared\PostController::class, 'store']
)->name('post-store');
