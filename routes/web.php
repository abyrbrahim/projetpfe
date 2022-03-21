<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return redirect()->route('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('users')->middleware('auth')->group(function () {
    Route::get('/', [UserController::class,'index'])->name('users');
    Route::get('/create', [UserController::class,'create'])->name('users.create');
    Route::post('/store', [UserController::class,'store'])->name('users.store');
    Route::get('/edit/{user}', [UserController::class,'edit'])->name('users.edit');
    Route::post('/update', [UserController::class,'update'])->name('users.update');
    Route::get('/delete/{id}', [UserController::class,'delete'])->name('users.delete');
});
Route::prefix('clients')->group(function () {
    Route::get('/', [ClientController::class,'index'])->name('clients');
    Route::get('/create', [ClientController::class,'create'])->name('clients.create');
    Route::post('/store', [ClientController::class,'store'])->name('clients.store');
    Route::get('/edit/{client}', [ClientController::class,'edit'])->name('clients.edit');
    Route::post('/update', [ClientController::class,'update'])->name('clients.update');
    Route::get('/delete/{id}', [ClientController::class,'delete'])->name('clients.delete');
});
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class,'index'])->name('products');
    Route::get('/create', [ProductController::class,'create'])->name('products.create');
    Route::post('/store', [ProductController::class,'store'])->name('products.store');
    Route::get('/edit/{product}', [ProductController::class,'edit'])->name('products.edit');
    Route::post('/update', [ProductController::class,'update'])->name('products.update');
    Route::get('/delete/{id}', [ProductController::class,'delete'])->name('products.delete');

});
Route::prefix('orders')->group(function () {
    Route::get('/', [OrderController::class,'index'])->name('orders');
    Route::get('/create', [OrderController::class,'create'])->name('orders.create');
    Route::post('/store', [OrderController::class,'store'])->name('orders.store');
    Route::get('/edit/{order}', [OrderController::class,'edit'])->name('orders.edit');
    Route::post('/update', [OrderController::class,'update'])->name('orders.update');
    Route::get('/delete/{id}', [OrderController::class,'delete'])->name('orders.delete');

});
