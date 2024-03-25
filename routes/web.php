<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
/*Route::post('/product/edit',[ProductController::class, 'edit'])->name('product.edit');*/

