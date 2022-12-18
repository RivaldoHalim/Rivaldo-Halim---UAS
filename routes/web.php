<?php

use App\Http\Controllers\TamuVippdf;
use App\Http\Controllers\TamuVip;
use Illuminate\Support\Facades\Route;

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
    return view('layouts.app2');
});

Route::resource('admin/tamu_hotel', 'App\Http\Controllers\Admin\tamu_hotelController');
Route::resource('admin/tamu_menginap_hotel', 'App\Http\Controllers\Admin\tamu_menginap_hotelController');
Route::resource('admin/kamar_tamu', 'App\Http\Controllers\Admin\kamar_tamuController');

Route::get('/laporan/hotel', [TamuVippdf::class, 'index']);
Route::get('/laporan/hotel/print', [TamuVippdf::class, 'print']);


