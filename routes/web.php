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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
Route::post('/category',[CategoryController::class, 'insert']);
Route::get('/category/edit{id}',[CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/edit{id}',[CategoryController::class, 'update']);
Route::get('/category/delete{id}',[CategoryController::class, 'destroy']);


Route::get('/product',[ProductController::class, 'index'])->name('product.index');
Route::post('/product',[ProductController::class, 'insert']);
Route::get('/product/edit{id}',[ProductController::class, 'edit'])->name('product.edit');
Route::put('/product/edit{id}',[ProductController::class, 'update']);
Route::get('/product/delete{id}',[ProductController::class, 'destroy']);