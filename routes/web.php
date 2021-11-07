<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MbarangController;

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

Route::resource('/master-barang', MbarangController::class)->except(['show']);

Route::get('/', function () {
    return view('Dashboard.index');
});