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

Route::get('/produk/tampil', [ProdukController::class, 'tampil'])->name('produk.tampil');
Route::get('produk/create', [ProdukController::class, 'create'])->name('produk.create');
Route::post('produk/tampil', [ProdukController::class, 'store'])->name('produk.store');
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit'])->name('produk.edit');
Route::put('produk/tampil/{produk}', [ProdukController::class, 'update'])->name('produk.update');
Route::delete('produk/tampil/{produk}', [ProdukController::class, 'destroy'])->name('produk.destroy');



