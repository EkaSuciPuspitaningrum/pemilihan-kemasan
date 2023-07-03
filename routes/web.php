<?php

use App\Http\Controllers\AturanKemasan;
use App\Http\Controllers\AutAdmin;
use App\Http\Controllers\AuthRegis;
use App\Http\Controllers\AuthAdmin;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardPakar;
use App\Http\Controllers\DashboardSuper;
use App\Http\Controllers\KelolaSuperAdmin;
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
//     return view('pakar.dashboard');
// });
Route::get('/', function () {
    return view('super-admin.dashboard');
});

// Route::get('/', function () {
//     return view('user.dashboard');
// });

// Route::get('/', function () {
//     return view('login.login');
// });

//pakar

Route::name('auth')->group(function(){
    Route::get('/regis_user', [AuthRegis::class,'show_regis_user'])->name('show_regis_user');
    Route::get('/regis_pakar', [AuthRegis::class,'show_regis_pakar'])->name('show_regis_pakar');
    
    Route::post('/akun_pakar_store', [AuthRegis::class,'pakar_store'])->name('pakar_store');
    Route::post('/akun_user_store', [AuthRegis::class,'user_store'])->name('user_store');
});

Route::name('super-admin')->group(function () {
    Route::get('/login_admin', [AutAdmin::class,'show_login_admin'])->name('show_login_admin');
    Route::get('/dashboard_super', [DashboardSuper::class,'show'])->name('dashboard_super.show');
    
    Route::get('/appr_pakar', [KelolaSuperAdmin::class,'appr_pakar'])->name('appr_pakar');
    Route::get('/calon_pakar/hapus/{id}', [KelolaSuperAdmin::class,'calon_pakar_hapus'])->name('calon_pakar_hapus');
    Route::get('/data_pakar', [KelolaSuperAdmin::class,'data_pakar'])->name('data_pakar');
    Route::post('/data_pakar_store', [KelolaSuperAdmin::class,'data_pakar_store'])->name('data_pakar_store');
    Route::get('/pakar/hapus/{id}', [KelolaSuperAdmin::class,'pakar_hapus'])->name('pakar_hapus');

    Route::get('/data_pengguna', [KelolaSuperAdmin::class,'data_pengguna'])->name('data_pengguna');
    Route::post('/data_pengguna_store', [KelolaSuperAdmin::class,'data_pengguna_store'])->name('data_pengguna_store');
    Route::get('/data_admin', [KelolaSuperAdmin::class,'data_admin'])->name('data_admin');
    
    Route::post('/admin_store', [KelolaSuperAdmin::class,'admin_store'])->name('admin_store');
    Route::get('/admin/hapus/{id}', [KelolaSuperAdmin::class,'admin_hapus'])->name('admin_hapus');
    Route::get('/admin/edit/{id}', [KelolaSuperAdmin::class,'admin_edit'])->name('admin_edit');
    Route::post('/admin/update', [KelolaSuperAdmin::class,'admin_update'])->name('admin_update');

   
});

Route::name('pakar')->group(function () {

    Route::get('/dashboard_pakar', [DashboardPakar::class,'show'])->name('dashboard_pakar.show');
    
    Route::get('/pustaka_produk', [PustakaProduk::class,'show'])->name('pustaka_produk.show');
    Route::post('/produk_store', [PustakaProduk::class,'store'])->name('produk_store');
    Route::get('/produk_show/{id}', [PustakaProduk::class,'produk_show'])->name('produk_show');
    Route::post('/kriteria_store', [PustakaProduk::class,'kriteriaStore'])->name('kriteria_store');
    Route::get('/kriteria_show/{id}', [PustakaProduk::class,'kriteria_show'])->name('kriteria_show');
  
    Route::get('/pustaka_kemasan', [PustakaKemasan::class,'show'])->name('pustaka_kemasan.show');
    Route::post('/kemasan_store', [PustakaKemasan::class,'store'])->name('kemasan_store');
    Route::post('/kemasan_show/{id}', [PustakaKemasan::class,'kemasan_show'])->name('kemasan_show');
    Route::post('/kemasan_edit/{id}', [PustakaKemasan::class,'kemasan_edit'])->name('kemasan_edit');
    
    Route::get('/aturan', [AturanKemasan::class,'show'])->name('aturan.show');
    Route::post('/pengetahuan_store', [AturanKemasan::class,'store'])->name('pengetahuan_store');
    Route::get('/pengetahuan_show/{id}', [AturanKemasan::class,'pengetahuan_edit'])->name('pengetahuan_edit');
    
    Route::get('/pakar_metode', [TentangMetode::class,'pakar_show'])->name('pakar_show');
    Route::get('/user_metode', [TentangMetode::class,'user_show'])->name('user_show');


});

Route::name('user')->group(function () {

    Route::get('/dashboard_user', [Dashboard::class,'show'])->name('dashboard.show'); 
    Route::get('/tentang', [TentangMetode::class,'show'])->name('tentang.show');
    Route::get('/cari', [PencarianKemasan::class,'show'])->name('cari.show');
    Route::get('/history', [PencarianKemasan::class,'showhistory'])->name('history.showhistory');
});