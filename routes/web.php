<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');

Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/', [PostController::class, 'index'])->middleware('auth');

// route binding that send data by id for file post
Route::get('/{post:slug}', [PostController::class, 'show'])->middleware('auth');

Route::get('/{post:slug}', [PostController::class, 'destroy']);

Route::get('/tag/{category:slug}', [PostController::class, 'category'])->middleware('auth');

Route::get('/user/{user:username}', [PostController::class, 'user'])->middleware('auth');

Route::get('/dashboard/profile/updateSlug', [ProfileController::class, 'updateSlug'])->middleware('auth');

// route resource
Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');
