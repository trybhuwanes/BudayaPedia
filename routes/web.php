<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/detail', function () {
    return view('detail');
});

// Route::get('/admin', function () {
//     return view('admin/dashboard');
// });
Route::get('/admin', [ContentController::class, 'dashboard'])->name('admin.dashboard');


Route::get('/buat', function () {
    return view('admin/create');
});

Route::get('/masuk', function () {
    return view('masuk');
})->name('Halaman Masuk');

Route::get('/succes', function () {
    return view('berhasil');
})->name('Succes');

Route::get('/prov', function () {
    return view('prov');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/akungagal', function () {
    return view('akungagal');
});

Route::get('/cobajah', function () {
    return view('cobajah');
});