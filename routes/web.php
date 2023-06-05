<?php

use App\Http\Controllers\AturanKemasan;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardAdmin;
use App\Http\Controllers\KriteriaKemasan;
use App\Http\Controllers\PencarianKemasan;
use App\Http\Controllers\PustakaKemasan;
use App\Http\Controllers\PustakaProduk;
use App\Http\Controllers\TentangMetode;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/', function () {
//     return view('halaman.dashboard');
// });

// Route::get('/', function () {
//     return view('admin.dashboard');
// });

Route::get('/', function () {
    return view('login.login');
});

//admin
Route::get('/dashboard', [Dashboard::class,'show'])->name('dashboard.show');

Route::get('/cari', [PencarianKemasan::class,'show'])->name('cari.show');
Route::get('/history', [PencarianKemasan::class,'show'])->name('history.showhistory');

Route::get('/tentang', [TentangMetode::class,'show'])->name('tentang.show');


Route::name('admin')->group(function () {
    Route::get('/dashboard_admin', [DashboardAdmin::class,'show'])->name('dashboard_admin.show');
    
    Route::get('/pustaka_produk', [PustakaProduk::class,'show'])->name('pustaka_produk.show');
    Route::post('/produk_store', [PustakaProduk::class,'store'])->name('produk_store');
    Route::get('/produk_show/{id}', [PustakaProduk::class,'produk_edit'])->name('produk_edit');
    Route::post('/kriteria_store', [PustakaProduk::class,'kriteriaStore'])->name('kriteria_store');
  
    Route::get('/pustaka_kemasan', [PustakaKemasan::class,'show'])->name('pustaka_kemasan.show');
    Route::post('/kemasan_store', [PustakaKemasan::class,'store'])->name('kemasan_store');
    Route::get('/aturan', [AturanKemasan::class,'show'])->name('aturan.show');
});

Route::name('user')->group(function () {
    Route::get('/dashboard_user', [Dashboard::class,'show'])->name('dashboard.show'); 
    Route::get('/pustaka_kemasan', [PustakaKemasan::class,'show'])->name('pustaka_kemasan.show');
    Route::get('/aturan', [AturanKemasan::class,'show'])->name('aturan.show');
});