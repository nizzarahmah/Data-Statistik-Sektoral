<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'Auth\LoginController@showLoginForm');


Auth::routes();

Route::namespace('Admin')->prefix('admin')->group(function () {
    Route::get('dashboard', 'DashboardController@index');
    Route::resource('users', 'UserController')->except(['show']);
    Route::resource('pemerintahan_daerah_pengampu', 'PemerintahanDaerahPengampuController')->except(['show']);
    Route::resource('bidang_urusan_pemerintahan', 'BidangUrusanPemerintahanController')->except(['show']);
    Route::resource('rincian_data', 'RincianDataController');
    Route::get('download/{upload_file}', 'RincianDataController@download')->name('rincian_data.download');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
