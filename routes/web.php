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

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;

Route::get('/', [PostController::class, 'index']);

// Posts
Route::get('/posts/criar', [PostController::class, 'create']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::post('/posts', [PostController::class, 'store']);

// Categories
Route::get('categorias/exibir', [CategoryController::class, 'index']);
Route::get('/categorias/criar', [CategoryController::class, 'create']);
Route::post('/categorias', [CategoryController::class, 'store']);
Route::get('/categorias/{id}', [CategoryController::class, 'show']);
