<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OptionController;

use App\Models\Category;
use App\Models\Product;


Route::get('/login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('/register', [RegisteredUserController::class, 'store']);


Route::get('/', function () {
    $categories = Category::all();
    return view('welcome', compact('categories'));
})->name('home');


Route::resource('categories', CategoryController::class);


Route::resource('products', ProductController::class);

Route::get('/admin/options/edit', [OptionController::class, 'edit'])->name('options.edit');

Route::put('/admin/options/update', [OptionController::class, 'update'])->name('options.update');
