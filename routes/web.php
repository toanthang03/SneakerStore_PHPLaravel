<?php
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\UserController;
use Illuminate\Support\Facades\Route;
//View Trang chủ
Route::prefix('/')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('Client');
    //Hiện View Login
    Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('login');
    Route::match(['get', 'post'], '/register', [UserController::class, 'register'])->name('register');

});
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Hiện View sản phẩm
Route::prefix('/product')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{id}', [ProductController::class, 'detail'])->name('products.detail');
});


