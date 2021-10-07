<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class , 'welcome'])->name('welcome');

Auth::routes();

Route::get('/profile/{pseudo}', [HomeController::class, 'index'])->name('home');
Route::get('verify',[HomeController::class,'verify'])->name('verify');
Route::post('verify',[HomeController::class, 'verifyCode'])->name('verify');
Route::get('profile-edit/{pseudo}',[HomeController::class, 'editProfile'])->name('profile.edit');
Route::put('profile-edit/{pseudo}',[HomeController::class, 'updateProfile'])->name('update.profile');
Route::put('password-edit/{pseudo}',[HomeController::class, 'updatePassword'])->name('update.password');


Route::resource('posts',PostsController::class)->middleware('auth');

Route::post('add-like', [PostsController::class, 'storeLike'])->name('like.store');

