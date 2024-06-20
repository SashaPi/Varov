<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SqlController;
use App\Http\Controllers\AuthController;

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

Route::get('/registration', [AuthController::class, 'regForm'])->name('regForm');

Route::post('/registration', [AuthController::class, 'register'])->name('register');

Route::get('/login', [AuthController::class, 'loginForm'])->name('loginForm');

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index')->middleware('auth');

Route::get('/cart/add/{product_id}', [CartController::class, 'store'])->name('cart.store')->middleware('auth');

Route::post('/cart/change/{product_id}', [CartController::class, 'change'])->name('cart.change')->middleware('auth');

Route::delete('/cart/{id}', [CartController::class, 'destroy'])->name('cart.destroy')->middleware('auth');

Route::get('/orders', [OrderController::class, 'index'])->name('orders.index')->middleware('auth');

Route::delete('/orders/{id}', [CartController::class, 'destroy'])->name('order.destroy')->middleware('auth');

Route::resource('orders', OrderController::class)->middleware('auth');

Route::get('/sql', [SqlController::class, 'index']);

Route::resource('products', ProductController::class);

Route::post('/products/filter', [ProductController::class, 'filter'])->name('products.filter');

Route::resource('categories', CategoryController::class);

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/registration', function () {
    return view('registration');
})->name('registration');
