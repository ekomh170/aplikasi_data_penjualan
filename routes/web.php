<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BpenjualanController;
use App\Http\Controllers\JpenjualanController;
use App\Http\Controllers\MpenjualanController;
use App\Http\Controllers\TpenjualanController;

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

Route::resource('/master-penjualan', MpenjualanController::class)->except(['show']);
Route::resource('/barang-penjualan', BpenjualanController::class)->except(['show']);
Route::resource('/jenis-penjualan', JpenjualanController::class)->except(['show']);
Route::resource('/transaksi-penjualan', TpenjualanController::class)->only(['index']);

Route::get('/', function () {
    return view('Dashboard.index');
});