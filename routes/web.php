<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\profileController;




                Route::get('/', function () {return view('welcome');});
                Auth::routes();
                Route::get('/homeMenu',[ProductController::class,'showTow'])->name('homeMenu')->middleware('auth');
                Route::get('/menu', function () {return view('products.menu');})->middleware('auth')->middleware('auth','role');
                Route::post('/product',[ProductController::class,'store'])->middleware('auth');
                Route::get('/dashbord',[ProductController::class,'show'])->name('dashbord')->middleware('auth','role');
                Route::get('/edite/{id}',[ProductController::class,'edit'])->middleware('auth')->middleware('auth','role');
                Route::put('update/{id}', [ProductController::class, 'update'])->middleware('auth')->middleware('auth','role');
                Route::delete('delete/{id}', [ProductController::class, 'destroy'])->middleware('auth')->middleware('auth','role');
                Route::get('/add', function () {return view('products.menu');})->middleware('auth')->middleware('auth','role');
                


                Route::get('/profile/{id}',[profileController::class,'showProfile'])->name('profile')->middleware('auth');
                Route::get('/edit/{id}',[profileController::class,'editProfile'])->middleware('auth')->middleware('auth');
                Route::post('/upProfile',[profileController::class,'updateProfile'])->name('UpdateProfile')->middleware('auth');
                