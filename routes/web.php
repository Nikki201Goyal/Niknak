<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;
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


Route::get('/', [App\Http\Controllers\CrudController::class,'read'])->name('nik');
Route::get('/store', [App\Http\Controllers\CrudController::class,'store'])->name('store');
Route::get('/index', [App\Http\Controllers\CrudController::class,'index'])->name('index')->middleware('auth');
Route::get('/read', [App\Http\Controllers\CrudController::class,'read'])->name('read')->middleware('auth');
Route::get('edit/{id}',[App\Http\Controllers\CrudController::class,'edit'])->name('edit');
Route::get('update/{id}',[App\Http\Controllers\CrudController::class,'update'])->name('update');
Route::get('delete/{id}',[App\Http\Controllers\CrudController::class,'delete'])->name('delete');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
