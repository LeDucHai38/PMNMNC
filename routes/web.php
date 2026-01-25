<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\authController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/auth')->group(function () {
    Route::get('/login', [authController::class, 'showLogin'])->name('auth.login');
    Route::post('/check-login', [authController::class, 'checkLogin'])->name('auth.check-login');
    Route::get('/signup', [authController::class, 'showSignup'])->name('auth.signup');
    Route::post('/check-signup', [authController::class, 'checkSignup'])->name('auth.check-signup');
    Route::get('/logout', [authController::class, 'logout'])->name('auth.logout');
});

Route::prefix('/product') -> group(function(){
   Route::get('/', [ProductController::class, 'index'])-> name('product.index');

    Route::get('/add', function () {
    return view('product.add');
}) -> name('add');

    Route::get('/detail/{id?}', [ProductController::class, 'getDetail']); 
});

Route::get('/sinhvien/{name?}/{mssv?}', function(string $name = 'Luong Xuan Hieu', string $mssv = '123456'){
    return view('sinhvien', data: [
        'name' => $name,
        'mssv' => $mssv,
    ]);
});

Route::get('/banco/{n}', function($n){
    return view('banco', ['n' => $n]);
});

Route::fallback(function(){
    return view('Error.404');
});