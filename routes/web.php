<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products',[ProductController::class, 'index'])->name('products.index');
Route::get('/products/ver/{id}',[ProductController::class, 'show'])->name('products.show');
Route::get('/products/create',[ProductController::class, 'create'])->name('products.create');
Route::post('/products/store',[ProductController::class, 'store'])->name('products.store');
Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('products.edit');
Route::put('/products/update/{id}', [ProductController::class,'update'])->name('products.update');
Route::delete('/products/destroy/{id}', [ProductController::class,'destroy'])->name('products.destroy');

/*
Route::get('form', function () {
    return view('products.form');
})->name('form');
Route::put('form', [ProductController::class,'store'])->name('save');*/
