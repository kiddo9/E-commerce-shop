<?php

use App\Models\product;
use App\Http\Controllers\AdminUser;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProduct;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\addressController;
use App\Http\Controllers\productController;

Route::post('/ordered-placed', [OrderController::class, 'store']);
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

Route::get('/order', [OrderController::class, 'Usersorders'])->middleware('auth');

Route::get('/currency', function () {
    return view('currency');
});

Route::get('/theme', function () {
    return view('theme');
});

Route::get('/address', [addressController::class, 'create'])->middleware('auth');
Route::post('/deliveryAddress', [addressController::class, 'store']);
Route::get('/pay', [addressController::class, 'pay'])->middleware('auth');

Route::get('/profile', [addressController::class, 'showAddress'])->middleware('auth');

Route::get('/shop', function () {
    return view('shop', [
        'product' => product::all()
    ]);
});
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::get('/signup', [UserController::class, 'create']);
Route::post('/users', [UserController::class, 'store']);
Route::post('/logout', [UserController::class, 'logout']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/Admin/login', function () {
    return view('Admin\Adminlogin');
});


Route::get('/Admin/Dashbored', function () {
    return view('Admin\Dashbored');
});

Route::get('/Admin/orders', [OrderController::class, 'index']);

Route::get('/Admin/ProductsUpdate', [AdminProduct::class, 'index']);
Route::delete('/Admin/ProductsUpdate/{id}', [AdminProduct::class, 'destroy']);

Route::get('/Admin/Customers', [AdminUser::class, 'index']);
Route::delete('/Admin/Customers/{id}', [AdminUser::class, 'destroy']);

Route::get('/Admin/employers', [addressController::class, 'listAddresses']);
