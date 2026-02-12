<?php

use App\Http\Middleware\CheckTimeAccess;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/product')->group(function(){
    Route::controller(ProductController::class) -> group(function () {
        Route::get('/', 'index') -> name('product.index');

        Route::get('/add', 'create') -> name('add');

        Route::get('/detail/{id?', 'get');

        Route::post('/store', 'store');
    });
});

Route::prefix('/category')->group(function(){
    Route::controller(CategoryController::class)->group(function () {
        Route::get('/', 'index')->name('category.index');
        Route::get('/create', 'create')->name('category.create');
        Route::post('/store', 'store')->name('category.store');
        Route::get('/edit/{id}', 'edit')->name('category.edit');
        Route::post('/update/{id}', 'update')->name('category.update');
        Route::post('/delete/{id}', 'destroy')->name('category.destroy');
    });
});

Route::prefix('/auth') -> group(function(){
    Route::controller(AuthController::class) -> group(function () {
        Route::get('/login', 'login') -> name('auth.login');

        Route::post('/checklogin', 'checklogin') -> name('checklogin');

        Route::get('/register', 'register') -> name('register');

        Route::post('/checkregister', 'checkregister') -> name ('register.post');
    });
});

Route::get('/sinhvien/{name?}/{mssv?}', function(string $name = 'Luong Xuan Hieu', string $mssv = '123456'){
    return view('sinhvien', data: [
        'name' => $name,
        'mssv' => $mssv,
    ]);
});

Route::resource('/tests', TestController::class);

Route::get('/age', [AuthController::class, 'ageSelect'])->name('age.select');

Route::post('/age/store', [AuthController::class, 'ageStore'])->name('age.store');

Route::get('/banco/{n}', function($n){
    return view('banco', ['n' => $n]);
});

Route::fallback(function(){
    return view('Error.404');
});
