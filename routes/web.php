<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
Route::post('/products/guardar', [ProductController::class,'store'])->name('products.guardar');
Route::get('actualizar/{id}', [ProductController::class,'update'])->name('actualizar');
Route::get('borrar/{id}', [ProductController::class,'destroy'])->name('borrar');

Route::get('form', function () {
    return view('products.form');
})->name('form');
Route::put('form', [ProductController::class,'store'])->name('save');
