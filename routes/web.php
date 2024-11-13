<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard;
use App\Http\Controllers\Shopping;

// Dashboard page -------------------------------------------------------------------------
Route::get('/dashboard', [dashboard::class,'index']);//->middleware('auth');
Route::get('/products', [dashboard::class,'products'])->name('products');//->middleware('auth');
Route::get('/create_newproducts', [dashboard::class,'create_newproducts'])->name('create_newproducts');//->middleware('auth');
Route::get('/showproduct_details', [dashboard::class,'showproduct_details'])->name('showdet');//->middleware('auth');
Route::get('/edit/{id}', [dashboard::class,'edit'])->name('edit');
Route::get('/update', [dashboard::class,'update'])->name('update');
Route::get('/delete', [dashboard::class,'delete'])->name('delete');
Route::get('/create_new_details', [dashboard::class,'create_new_details'])->name('create_new_details');


// shopping page -------------------------------------------------------------------------
Route::get('/', [Shopping::class,'index'])->name('index');//->middleware('auth');
Route::get('/electric', [Shopping::class,'electric'])->name('electric');
Route::get('/homeFurniture', [Shopping::class,'homeFurniture'])->name('homeFurniture');
Route::get('/productDetails/{id}', [Shopping::class,'productDetails'])->name('productDetails');
Route::get('/add_to_cart', [Shopping::class,'add_to_cart'])->name('add_to_cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
