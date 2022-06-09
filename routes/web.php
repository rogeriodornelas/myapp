<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessController;
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

Route::get('businesses', [BusinessController::class, 'index'])->name('businesses.index');
Route::post('businesses', [BusinessController::class, 'store'])->name('businesses.store');
Route::get('users/{user}', [UserController::class,'show'])->name('users.show');
Route::get('users', [UserController::class,'index'])->name('users.index');

Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('posts/{post}', [PostController::class, 'show'])->name('posts.show');

Route::get('/', function () {
   return view('welcome');
});
