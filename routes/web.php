<?php
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\UserController;
use Illuminate\Support\Facades\Route;
//View Trang chủ
Route::prefix('/')->group(function () {
    Route::get('', [HomeController::class, 'index'])->name('Client');
});

//Hiện View sản phẩm
Route::prefix('/product')->group(function () {
    Route::get('', [ProductController::class, 'index'])->name('products.index');
    Route::get('/{id}', [ProductController::class, 'detail'])->name('products.detail');
});

//Hiện View Login
Route::prefix('/login')->group(function () {
    Route::get('', [UserController::class, 'login'])->name('login');
});