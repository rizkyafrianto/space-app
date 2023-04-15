<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

use Psy\TabCompletion\Matcher\FunctionsMatcher;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostController::class, 'show']);

// route binding that send data by id for file post
Route::get('/post/{post:slug}', [PostController::class, 'index']);

Route::get('/tag/{category:slug}', [PostController::class, 'category']);

Route::get('/user/{user:username}', [PostController::class, 'user']);
