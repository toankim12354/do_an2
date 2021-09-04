<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Khoa\KhoaController;
use App\Http\Controllers\Nganh\NganhController;
use App\Http\Controllers\Lop\LopController;
use App\Http\Controllers\SinhVien\SinhVienCOntroller;
use App\Http\Controllers\Mon\MonController;
use App\Http\Controllers\Diem\DiemController;
/*
MonController
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::middleware(['auth:giao_vu', 'isSuper'])->group(function() {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // logout
    
//show admin 
    Route::resource('admin-manager', AdminController::class);
//resource khoa
    Route::resource('khoa-manager', KhoaController::class);
    //resource nganh
    Route::resource('nganh-manager', NganhController::class);
    //lop
    Route::resource('lop-manager', LopController::class);
       //sinh vien
       Route::resource('sinhvien-manager', SinhVienCOntroller::class);
       //mon
       Route::resource('mon-manager', MonController::class);
       //diem
       Route::resource('diem-manager', DiemController::class);
}); 

Route::name('login.')->group(function() {
    Route::get('/login', [LoginController::class, 'showLogin'])->name('form');
    Route::post('/login', [LoginController::class, 'login'])->name('process');
});

// chi sau khi dang nhap moi duoc vao cac route nay
Route::middleware(['auth:giao_vu'])->group(function() {
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

