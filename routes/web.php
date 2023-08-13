<?php

use App\Http\Controllers\PengetahuanPakar;
use App\Http\Controllers\AuthAdmin;
use App\Http\Controllers\AuthRegis;
use App\Http\Controllers\AuthLogin;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\DashboardPakar;
use App\Http\Controllers\DashboardSuper;
use App\Http\Controllers\KelolaSuperAdmin;
use App\Http\Controllers\PencarianKemasan;
use App\Http\Controllers\ProdukAdmin;
use App\Http\Controllers\KemasanAdmin;
use App\Http\Controllers\ProdukPakar;
use App\Http\Controllers\TentangMetode;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\ExpertMiddleware;
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



Route::get('/', function () {
    return view('user.dashboard');
});

Route::name('user')->group(function () {

    Route::get('/dashboard_user', [Dashboard::class,'show'])->name('dashboard.show'); 
    Route::get('/tentang', [TentangMetode::class,'user_show'])->name('tentang');
    Route::get('/history', [PencarianKemasan::class,'showhistory'])->name('history.showhistory');

    Route::get('/pencarian', [PencarianKemasan::class,'pencarian_show'])->name('pencarian');
    Route::post('/pencarian_analisa', [PencarianKemasan::class, 'analisa'])->name('pencarian_analisa');

});

Route::name('auth')->group(function(){
    Route::get('/login', [AuthLogin::class,'login'])->name('login');

    Route::get('/regis_pakar', [AuthRegis::class,'show_regis_pakar'])->name('show_regis_pakar');
    
    Route::post('/calon_pakar_store', [AuthRegis::class,'calon_pakar_store'])->name('calon_pakar_store');
    
    Route::post('/login_admin', [AuthLogin::class, 'actionlogin'])->name('actionlogin');
    Route::get('/login_admin', [AuthAdmin::class,'show_login_admin'])->name('show_login_admin');
    
    Route::get('actionlogout', [AuthLogin::class, 'actionlogout'])->name('actionlogout');
    Route::post('/login_pakar', [AuthLogin::class, 'login_pakar'])->name('login_pakar');  
});


Route::group(['pakar'], function () {
    Route::get('/dashboard_pakar', [DashboardPakar::class,'show'])->name('dashboard_pakar.show');
    Route::get('/pakar_metode', [DashboardPakar::class,'pakar_show'])->name('pakar_show');
    
    Route::get('/pustaka_produk', [ProdukPakar::class,'show'])->name('pustaka_produk.show');
    Route::post('/kriteria_store', [ProdukPakar::class,'kriteriaStore'])->name('kriteria_store');
    Route::get('/kriteria/edit/{id}', [ProdukPakar::class,'kriteria_edit'])->name('kriteria_edit');
    Route::post('/kriteria/update/{id}', [ProdukPakar::class, 'kriteria_update'])->name('kriteria_update');
    Route::get('/kriteria/hapus/{id}', [ProdukPakar::class,'kriteria_hapus'])->name('kriteria_hapus');
  
    Route::get('/pustaka_kemasan', [KemasanPakar::class,'show'])->name('pustaka_kemasan.show');
    Route::post('/kemasan_store', [KemasanPakar::class,'store'])->name('kemasan_store');
    Route::get('/kemasan/edit/{id}', [KemasanPakar::class,'kemasan_edit'])->name('kemasan_edit');
    Route::post('/kemasan/update/{id}', [KemasanPakar::class, 'kemasan_update'])->name('kemasan_update');
    Route::get('/kemasan/hapus/{id}', [KemasanPakar::class,'kemasan_hapus'])->name('kemasan_hapus');
    
    Route::get('/aturan', [PengetahuanPakar::class,'show'])->name('aturan.show');
    Route::post('/pengetahuan_store', [PengetahuanPakar::class,'store'])->name('pengetahuan_store');
    Route::get('/pengetahuan/edit/{id}', [PengetahuanPakar::class,'pengetahuan_edit'])->name('pengetahuan_edit');
    Route::post('/pengetahuan/update/{id}', [PengetahuanPakar::class, 'pengetahuan_update'])->name('pengetahuan_update');
    Route::get('/pengetahuan/hapus/{id}', [PengetahuanPakar::class,'pengetahuan_hapus'])->name('pengetahuan_hapus');  
});

Route::group(['admin'], function () {
    Route::get('/dashboard_super', [DashboardSuper::class,'show'])->name('dashboard_super');
    
    Route::get('/appr_pakar', [KelolaSuperAdmin::class,'appr_pakar'])->name('appr_pakar');
    Route::get('/calon_pakar/hapus/{id}', [KelolaSuperAdmin::class,'calon_pakar_hapus'])->name('calon_pakar_hapus');
    Route::get('/data_pakar', [KelolaSuperAdmin::class,'data_pakar'])->name('data_pakar');
    Route::get('/move_calon_pakar/{id}', [KelolaSuperAdmin::class,'move_calon_pakar'])->name('move_calon_pakar');
    Route::post('/data_pakar_store', [KelolaSuperAdmin::class,'data_pakar_store'])->name('data_pakar_store');
   
    Route::get('/lihat_cv/{id}', [KelolaSuperAdmin::class,'lihat_cv'])->name('lihat_cv');
    Route::get('/lihat_cv_appr/{id}', [KelolaSuperAdmin::class,'lihat_cv_appr'])->name('lihat_cv_appr');
    
    Route::get('/pakar/edit/{id}', [KelolaSuperAdmin::class,'pakar_edit'])->name('pakar_edit');
    Route::post('/pakar/update/{id}', [KelolaSuperAdmin::class, 'pakar_update'])->name('pakar_update');
    Route::get('/pakar/hapus/{id}', [KelolaSuperAdmin::class,'pakar_hapus'])->name('pakar_hapus');
 
    Route::get('/data_admin', [KelolaSuperAdmin::class,'data_admin'])->name('data_admin');
    Route::post('/admin_store', [KelolaSuperAdmin::class,'admin_store'])->name('admin_store');
    Route::get('/admin/hapus/{id}', [KelolaSuperAdmin::class,'admin_hapus'])->name('admin_hapus');
    Route::get('/admin/edit/{id}', [KelolaSuperAdmin::class,'admin_edit'])->name('admin_edit');
    Route::post('/admin/update/{id}', [KelolaSuperAdmin::class, 'admin_update'])->name('admin_update');

    Route::get('/pustaka_produk_admin', [ProdukAdmin::class,'produk_admin'])->name('pustaka_produk_admin');
    Route::post('/kriteriaadmin_store', [ProdukAdmin::class,'kriteriaadminStore'])->name('kriteriaadmin_store');
    Route::get('/kriteriaadmin/edit/{id}', [ProdukAdmin::class,'kriteria_edit_admin'])->name('kriteria_edit_admin');
    Route::post('/kriteriaadmin/update/{id}', [ProdukAdmin::class, 'kriteria_update_admin'])->name('kriteria_update_admin');
    Route::get('/kriteriaadmin/hapus/{id}', [ProdukAdmin::class,'kriteria_hapus_admin'])->name('kriteria_hapus_admin');
 
    Route::get('/pustaka_kemasan_admin', [KemasanAdmin::class,'kemasan_admin'])->name('pustaka_kemasan_admin');
    Route::post('/kemasanadmin_store', [KemasanAdmin::class,'kemasan_store_admin'])->name('kemasanadmin_store');
    Route::get('/kemasanadmin/edit/{id}', [KemasanAdmin::class,'kemasan_edit_admin'])->name('kemasan_edit_admin');
    Route::post('/kemasanadmin/update/{id}', [KemasanAdmin::class, 'kemasan_update_admin'])->name('kemasan_update_admin');
    Route::get('/kemasanadmin/hapus/{id}', [KemasanAdmin::class,'kemasan_hapus_admin'])->name('kemasan_hapus_admin');
});
