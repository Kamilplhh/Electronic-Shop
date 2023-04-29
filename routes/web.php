<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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

Route::get('/', [HomeController::class, 'GetData']);

Route::get('cart', [HomeController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [HomeController::class, 'addToCart'])->name('add_to_cart');
Route::delete('/remove-from-cart/{id}', [HomeController::class, 'remove'])->name('remove_from_cart');

Route::get('categories', [CategoryController::class, 'GetCategories']);
Route::get('/{id}', [CategoryController::class, 'GetSelected']);

Route::get('/product/{id}', [ProductController::class, 'GetItem']);

Route::get('/contact', [HomeController::class, 'Contact']);