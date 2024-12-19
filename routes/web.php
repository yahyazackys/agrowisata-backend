<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [App\Http\Controllers\LoginController::class, 'index']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');

        Route::get('/user', [App\Http\Controllers\UserController::class, 'index'])->name('user');
        Route::get('/add-user', [App\Http\Controllers\UserController::class, 'add'])->name('add-user');
        Route::post('/store-user', [App\Http\Controllers\UserController::class, 'store'])->name('store-user');
        Route::get('/edit-user/{id}', [App\Http\Controllers\UserController::class, 'edit'])->name('edit-user');
        Route::post('/update-user', [App\Http\Controllers\UserController::class, 'update'])->name('update-user');
        Route::get('/delete-user/{id}', [App\Http\Controllers\UserController::class, 'delete'])->name('delete-user');

        Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
        Route::get('/add-category', [App\Http\Controllers\CategoryController::class, 'add'])->name('add-category');
        Route::post('/store-category', [App\Http\Controllers\CategoryController::class, 'store'])->name('store-category');
        Route::get('/edit-category/{id}', [App\Http\Controllers\CategoryController::class, 'edit'])->name('edit-category');
        Route::post('/update-category', [App\Http\Controllers\CategoryController::class, 'update'])->name('update-category');
        Route::get('/delete-category/{id}', [App\Http\Controllers\CategoryController::class, 'delete'])->name('delete-category');
        
        Route::get('/product', [App\Http\Controllers\ProductController::class, 'index'])->name('product');
        Route::get('/add-product', [App\Http\Controllers\ProductController::class, 'add'])->name('add-product');
        Route::post('/store-product', [App\Http\Controllers\ProductController::class, 'store'])->name('store-product');
        Route::get('/edit-product/{id}', [App\Http\Controllers\ProductController::class, 'edit'])->name('edit-product');
        Route::post('/update-product', [App\Http\Controllers\ProductController::class, 'update'])->name('update-product');
        Route::get('/delete-product/{id}', [App\Http\Controllers\ProductController::class, 'delete'])->name('delete-product');
