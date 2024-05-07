<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

//http://127.0.0.1:8000/products

// Menampilkan halaman produk
Route::get('/products', [ProductController::class, 'index'])->name('show-products');
// Menampilkan halaman list produk sesuai id
Route::get('/admin/{user_id}/list-products', [ProductController::class, 'listProducts'])->name('list-products');
// Menampilkan form tambah produk sesuai id
Route::get('/admin/{user_id}/get-form', [ProductController::class, 'getForm'])->name('get-form');
// Menyimpan data produk baru sesuai id
Route::post('/admin/{user_id}/post-form', [ProductController::class, 'postForm'])->name('post-form');
// Menampilkan form edit produk produk sesuai id
Route::get('/admin/{user_id}/edit-product/{id}', [ProductController::class, 'edit'])->name('edit-product');
// Menyimpan perubahan pada produk produk sesuai id
Route::put('/admin/{user_id}/update-product/{id}', [ProductController::class, 'update'])->name('update-product');
// Menghapus produk sesuai id
Route::delete('/admin/{user_id}/delete-product/{id}', [ProductController::class, 'destroy'])->name('delete-product');
// Menampilkan halaman profile
Route::get('/profile/{id}', [UserController::class, 'showProfile'])->name('user.profile');

