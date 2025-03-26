<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::get('/produk', [ProdukController::class, 'tampil']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::get('/produk/tampil', [ProdukController::class, 'tampil']);



