<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Models\Content;

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

Route::get('/', [ContentController::class, 'home'])->name('content.home')->middleware('auth');
Route::get('/detail/{content:id}', [ContentController::class, 'detail'])->name('content.detail')->middleware('auth');
Route::get('/provinsi', [ContentController::class, 'provinsi'])->name('content.provinsi')->middleware('auth');


Route::get('/register', [RegisterController::class, 'show'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('register.perform')->middleware('guest');
Route::get('/berhasil', [RegisterController::class, 'success'])->name('user.success')->middleware('auth');

Route::get('/login', [LoginController::class, 'show'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform')->middleware('guest');

Route::get('/logout', [LogoutController::class, 'perform'])->name('logout.perform')->middleware('auth');

Route::get('/loginadmin', [AdminController::class, 'login'])->name('admin.login');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/buat', [AdminController::class, 'create'])->name('admin.create');
Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/delete/{content:id}', [AdminController::class, 'delete'])->name('admin.delete');
Route::get('/edit/{content:id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/update/{content:id}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/baca/{content:id}', [AdminController::class, 'read'])->name('admin.read');

