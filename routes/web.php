<?php

use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\produkkategoricontroller;
use Illuminate\Support\Facades\Route;

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

//  Route::get('/produk', function () {
//      return view('/produk.index');
//  });

//Dashboard
Route::get('/', [produkkategoricontroller::class,'dashboard'])->name('dashboard');


// CRUD Produk
// Route::get('/', [produkcontroller::class, 'index']);
Route::get('/produk', [produkcontroller::class, 'index'])->name('produk.index');
Route::get('/tambahproduk', [produkcontroller::class, 'create'])->name('produk.create');
Route::post('/produk', [produkcontroller::class, 'store'])->name('produk.store');
Route::get('produk/{id_produk}/edit', [produkcontroller::class, 'edit'])->name('produk.edit');
Route::post('produk/{id_produk}', [produkcontroller::class, 'update'])->name('produk.update');
Route::delete('/produk/{id_produk}', [produkcontroller::class, 'delete'])->name('produk.delete');

//Kategori
Route::get('/kategori', [kategoricontroller::class, 'index'])->name('kategori.index');
Route::get('/tambahkategori', [kategoricontroller::class, 'create'])->name('kategori.create');
Route::post('/kategori', [kategoricontroller::class, 'store'])->name('kategori.store');
Route::get('kategori/{id_kategori}/edit', [kategoricontroller::class, 'edit'])->name('kategori.edit');
Route::post('kategori/{id_kategori}', [kategoricontroller::class, 'update'])->name('kategori.update');
Route::delete('/kategori/{id_kategori}', [kategoricontroller::class, 'delete'])->name('kategori.delete');






