<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home']);

//halaman produk
Route::prefix('admin')->group(function(){
    Route::get('/category/food-beverage', [ProductsController::class, 'food']);
    Route::get('/category/beauty-health', [ProductsController::class, 'beauty']);
    Route::get('/category/home-care', [ProductsController::class, 'home']);
    Route::get('/category/baby-kid', [ProductsController::class, 'baby']);
});


Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);
Route::get('/penjualan', [PenjualanController::class, 'penjualan']);
