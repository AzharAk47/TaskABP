<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\MerkController;

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
Route::get('/product',[ProductController::class,'index']);
Route::get('/product/add',[ProductController::class,'create']);
Route::post('/store', [ProductController::class, 'store'])->name('store');
Route::get('/product/edit',[ProductController::class,'edit']);
Route::controller(GudangController::class)->group(function () {
    Route::get('Gudangku', 'index')->name('Gudangku.index');
    Route::get('create', 'create')->name('Gudangku.create');
    Route::post('store', 'store')->name('Gudangku.store');
    Route::get('show/{id}', 'show')->name('Gudangku.tampil');
    Route::get('edit/{id}', 'edit')->name('Gudangku.edit');
    Route::patch('update/{id}', 'update')->name('Gudangku.update');
    Route::delete('destroy/{id}', 'destroy')->name('Gudangku.destroy');
});
Route::controller(MerkController::class)->group(function () {
    Route::get('Merk', 'index')->name('Merk.index');
    Route::get('Merk', 'create')->name('Merk.create');
});