<?php

use App\Http\Controllers\addressController;
use App\Models\product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\productController;

Route::get('/', [productController::class, 'index']);
Route::get('/today/create', [productController::class, 'create']);
Route::post('/today', [productController::class, 'store']);
Route::get('/welcome/{id}', [productController::class, 'show']);
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/cart', function () {
    return view('today/cart');
});
Route::get('/search', function () {
    return view('search');
});

Route::get('/searchProduct', [productController::class, 'search']);

Route::get('/setting', function () {
    return view('today/setting');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/currency', function () {
    return view('currency');
});

Route::get('/theme', function () {
    return view('theme');
});

Route::get('/address', [addressController::class, 'create']);
Route::post('/deliveryAddress', [addressController::class, 'store']);
Route::get('/pay', [addressController::class, 'pay']);

Route::get('/profile', function () {
    return view('today/profile');
});

Route::get('/shop', function () {
    return view('shop', [
        'product' => product::all()
    ]);
});
Route::get('/login', [UserController::class, 'login']);
Route::get('/signup', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
