<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AdminController;
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
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [ContentController::class, 'home'])->name('content.home');
Route::get('/admin', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/buat', [AdminController::class, 'create'])->name('admin.create');

Route::post('/store', [AdminController::class, 'store'])->name('admin.store');
Route::get('/delete/{content:id}', [AdminController::class, 'delete'])->name('admin.delete');
Route::get('/edit/{content:id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::put('/update/{content:id}', [AdminController::class, 'update'])->name('admin.update');
Route::get('/baca/{content:id}', [AdminController::class, 'read'])->name('admin.read');

Route::get('/detail/{content:id}', [ContentController::class, 'detail'])->name('content.detail');
Route::get('/provinsi', [ContentController::class, 'provinsi'])->name('content.provinsi');

// Route::get('/buat', function () {
//     return view('admin/create');
// });

Route::get('/masuk', function () {
    return view('masuk');
})->name('Halaman Masuk');

Route::get('/succes', function () {
    return view('berhasil');
})->name('Succes');

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/akungagal', function () {
    return view('akungagal');
});

Route::get('/berhasil', function () {
    return view('berhasil');
});
