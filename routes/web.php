<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mine/', [CartController::class, 'index'])->name('cart');
Route::post('/mine/add/', [CartController::class, 'add'])->name('cart.add');
Route::delete('/mine/remove/', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/category/{category}/', [CategoryController::class, 'index'])->name('category');
Route::get('/product/{product}/', [ProductController::class, 'index'])->name('product');
Route::get('/contact/', [HomeController::class, 'index'])->name('contact');

Route::get('/dashboard/employees/', [DashboardController::class, 'index'])->name('employees');
