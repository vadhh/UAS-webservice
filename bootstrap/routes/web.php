<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\AcryController;
use App\Http\Controllers\HeseController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\KategoriController;
use App\Http\Controllers\admin\ProdukController;



Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login']);
Route::get('/account', function () {
    return view('account');
})->name('account');

Route::get('/signup', function () {
    return view('signup');
});
Route::post('/signup', [AuthController::class, 'signup']);

Route::middleware('auth')->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::post('/logout', [AccountController::class, 'logout'])->name('logout');
});

Route::get('/', [ProductController::class, 'index']);

Route::get('/pet', [PetController::class, 'index']);

Route::get('/fns', [FoodController::class, 'index']);

Route::get('/acry', [AcryController::class, 'index']);

Route::get('/hese', [HeseController::class, 'index']);


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});


Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');
Route::post('/kategori', [KategoriController::class, 'store'])->name('kategori.store');

Route::get('/produk', [ProdukController::class, 'index'])->name('produk.index');
Route::post('/produk', [ProdukController::class, 'store'])->name('produk.store');
