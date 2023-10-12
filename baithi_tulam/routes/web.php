<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [ProductController::class, 'index'])->name('trangchu');
Route::get('/addproduct/{id?}', [ProductController::class, 'addProduct'])->name('themmoisanpham');
Route::get('/delproduct/{id?}', [ProductController::class, 'delProduct'])->name('xoasanpham');
Route::get('/listproduct', [ProductController::class, 'listProduct'])->name('danhsachsanpham');
Route::post('/store', [ProductController::class, 'store'])->name('store');
// Route::get('/addproduct', [CategoryController::class, 'addCategory'])->name('themmoidanhmuc');
// Route::get('/addnew', [CategoryController::class, 'addCategory'])->name('themmoidanhmuc');