<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;


        Route::get('/', function () {return view('welcome');});
        Auth::routes();
        Route::get('/homeMenu',[ProductController::class,'showTow'])->name('homeMenu')->middleware('auth');
        Route::get('/menu', function () {return view('products.menu');})->middleware('auth');
        Route::post('/product',[ProductController::class,'store'])->middleware('auth');
        Route::get('/dashbord',[ProductController::class,'show'])->name('dashbord')->middleware('auth','role');
        Route::get('/edit/{id}',[ProductController::class,'edit'])->middleware('auth');
        Route::put('update/{id}', [ProductController::class, 'update'])->middleware('auth');
        Route::delete('delete/{id}', [ProductController::class, 'destroy'])->middleware('auth');
        Route::get('/add', function () {return view('products.menu');})->middleware('auth');
     