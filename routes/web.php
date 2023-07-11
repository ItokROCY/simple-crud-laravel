<?php

use App\Http\Controllers\chartJsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\kontrol_barang;
use App\Http\Controllers\kontrolKategori;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', [kontrol_barang::class, 'index'])->name(('index'));
Route::get('/barang', [kontrol_barang::class, 'index'])->name('barang.index');

Route::get('/barang-create', [kontrol_barang::class, 'create'])->name('barang.create');
Route::post('/barang/store', [kontrol_barang::class, 'store'])->name('barang.store');
Route::put('/edit/{id}', [kontrol_barang::class, 'update'])->name('barang.update');

Route::get('/edit/{id}', [kontrol_barang::class, 'edit'])->name('barang.edit');

Route::get('/show/{id}', [kontrol_barang::class, 'show'])->name('barang.read');
Route::delete('/barang/{id}', [kontrol_barang::class, 'destroy'])->name('barang.destroy');


Route::get('/barang-kategori', [kontrolKategori::class,'index'])->name('index.kategori');



// chart (undone)
Route::get('/chart', [chartJsController::class, 'index']);


// search route
Route::get('/cari', [kontrol_barang::class, 'search']);
Route::get('/cariDrop', [kontrol_barang::class, 'cariDrop']);