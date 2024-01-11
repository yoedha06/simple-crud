<?php

use App\Http\Controllers\authcontroller;
use App\Http\Controllers\kategoribiasacontroller;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\produkbiasacontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\produkkategoricontroller;
use App\Http\Middleware\NoCache;
use App\Http\Middleware\RoleMiddleware;
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

//Login
Route::get('/', [authcontroller::class, 'showLoginForm'])->name('login');
Route::post('/login', [authcontroller::class, 'login']);

// Rute yang memerlukan otentikasi (auth)
Route::group(['middleware' => 'auth'], function () {

        Route::group(['middleware' => 'can:role,"admin"'], function(){

            Route::middleware([NoCache::class])->group(function () {

            Route::get('dashboardadmin', [AuthController::class, 'dashboardadmin'])->name('dashboardadmin');
            //produk biasa
            Route::get('admin/produkbiasa', [produkbiasacontroller::class, 'index'])->name('admin.produk-biasa.index');
            Route::get('admin/tambahprodukbiasa', [produkbiasacontroller::class, 'create'])->name('admin.produk-biasa.create');
            Route::post('admin/produkbiasa', [produkbiasacontroller::class, 'store'])->name('admin.produk-biasa.store');
            Route::get('admin/produkbiasa/{id_produk}/edit', [produkbiasacontroller::class, 'edit'])->name('admin.produk-biasa.edit');
            Route::post('admin/produkbiasa/{id_produk}', [produkbiasacontroller::class, 'update'])->name('admin.produk-biasa.update');
            Route::delete('admin/produkbiasa/{id_produk}', [produkbiasacontroller::class, 'delete'])->name('admin.produk-biasa.delete');

            //kategori biasa
            Route::get('admin/kategoribiasa', [kategoribiasacontroller::class, 'index'])->name('admin.kategori-biasa.index');
            Route::get('admin/tambahkategoribiasa', [kategoribiasacontroller::class, 'create'])->name('admin.kategori-biasa.create');
            Route::post('admin/kategoribiasa', [kategoribiasacontroller::class, 'store'])->name('admin.kategori-biasa.store');
            Route::get('admin/kategoribiasa/{id_kategori}/edit', [kategoribiasacontroller::class, 'edit'])->name('admin.kategori-biasa.edit');
            Route::post('admin/kategoribiasa/{id_kategori}', [kategoribiasacontroller::class, 'update'])->name('admin.kategori-biasa.update');
            Route::delete('admin/kategoribiasa/{id_kategori}', [kategoribiasacontroller::class, 'delete'])->name('admin.kategori-biasa.delete');
            });
        });

    // Rute yang hanya dapat diakses oleh staff
    Route::group(['middleware' => 'can:role,"admin","staff"'],function() {

        Route::middleware([NoCache::class])->group(function () {

        // Route::get('dashboardstaff', [AuthController::class, 'dashboardstaff'])->name('dashboardstaff');
        //produk-berelasi
        Route::get('admin/produk', [produkcontroller::class, 'index'])->name('admin.produk-berelasi.index');
        Route::get('admin/tambahproduk', [produkcontroller::class, 'create'])->name('admin.produk-berelasi.create');
        Route::post('admin/produk', [produkcontroller::class, 'store'])->name('admin.produk-berelasi.store');
        Route::get('admin/produk/{id_produk}/edit', [produkcontroller::class, 'edit'])->name('admin.produk-berelasi.edit');
        Route::post('admin/produk/{id_produk}', [produkcontroller::class, 'update'])->name('admin.produk-berelasi.update');
        Route::delete('admin/produk/{id_produk}', [produkcontroller::class, 'delete'])->name('admin.produk-berelasi.delete');

        //Kategori-berelasi
        Route::get('admin/kategori', [kategoricontroller::class, 'index'])->name('admin.kategori-berelasi.index');
        Route::get('admin/tambahkategori', [kategoricontroller::class, 'create'])->name('admin.kategori-berelasi.create');
        Route::post('admin/kategori', [kategoricontroller::class, 'store'])->name('admin.kategori-berelasi.store');
        Route::get('admin/kategori/{id_kategori}/edit', [kategoricontroller::class, 'edit'])->name('admin.kategori-berelasi.edit');
        Route::post('admin/kategori/{id_kategori}', [kategoricontroller::class, 'update'])->name('admin.kategori-berelasi.update');
        Route::delete('admin/kategori/{id_kategori}', [kategoricontroller::class, 'delete'])->name('admin.kategori-berelasi.delete');
        
        });
    });
});

 Route::get('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('web');













