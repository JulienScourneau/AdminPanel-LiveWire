<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
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

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/livewire', [PostController::class, 'index']);

Route::get('signup', [RegisterController::class, 'create'])->middleware('guest');
Route::post('signup', [RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [SessionController::class, 'create'])->middleware('guest');
Route::post('login', [SessionController::class, 'store'])->middleware('guest');
Route::post('logout', [SessionController::class, 'destroy'])->middleware('auth');
Route::post('livewire/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('dashboard', [AdminController::class, 'index'])->middleware('can:admin');

Route::get('new-post', [PostController::class, 'create'])->middleware('can:admin');
Route::post('create/post', [PostController::class, 'store'])->middleware('can:admin');
Route::delete('delete/post/{post:id}', [PostController::class, 'destroy'])->middleware('can:admin');

Route::get('new-user', [UserController::class, 'create'])->middleware('can:admin');
Route::delete('delete/user/{user:id}', [UserController::class, 'destroy'])->middleware('can:admin');

Route::get('livewire/dashboard', function () {
    return view('components.dashboard-livewire');
})->middleware('can:admin');

Route::get('livewire/new-post', [PostController::class, 'create'])->middleware('can:admin');
Route::post('livewire/create/post', [PostController::class, 'store'])->middleware('can:admin');
Route::delete('livewire/delete/post/{post:id}', [PostController::class, 'destroy'])->middleware('can:admin');

Route::get('livewire/new-user', [UserController::class, 'create'])->middleware('can:admin');
Route::delete('livewire/delete/user/{user:id}', [UserController::class, 'destroy'])->middleware('can:admin');

