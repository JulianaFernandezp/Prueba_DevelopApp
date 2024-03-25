<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CarController;

Route:: get('/', function(){
    return view('Login.login');
})->middleware('guest')->name('login');

/*Route:: get('/home', function(){
return view('Home.index');
})->middleware('auth')->name('home');*/

Route:: post('login', [LoginController::class, 'login'])->name('signin');
Route:: post('logout', [LoginController::class, 'logout'])->name('logout');
Route::get('home',[ProductController::class, 'index'])->middleware('auth')->name('inicio');
Route::post('/product/create',[ProductController::class, 'create'])->name('product.create');
Route::get('/product/edit/{id}',[ProductController::class, 'edit'])->name('product.edit');
Route::get('/product/delete/{id}',[ProductController::class, 'destroy'])->name('product.delete');
Route::post('/product/update/{id}',[ProductController::class, 'update'])->name('product.update');

Route::post('/category/create',[CategoryController::class, 'create'])->name('category.create');
Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
Route::get('/category/delete/{id}',[CategoryController::class, 'destroy'])->name('category.delete');
Route::post('/category/update/{id}',[CategoryController::class, 'update'])->name('category.update');
Route::get('/category/productos/{id}',[CategoryController::class, 'index'])->name('category.productos');

Route::post('/car/create',[CarController::class, 'create'])->name('car.create');
Route::get('cart', [CarController::class, 'index'])->name('cart');
Route::post('/car/update/{id}',[CarController::class, 'update'])->name('car.update');
Route::get('/car/productos/{id}',[CarController::class, 'destroy'])->name('car.delete');




