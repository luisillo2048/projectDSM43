<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\Product2Controller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('product/index', [ProductController::class, 'index'])->name('product.index');

Route::get('product/create', [ProductController::class, 'create'])->name('product.create');

Route::get('product2/index', [Product2Controller::class, 'index'])->name('product2.index');