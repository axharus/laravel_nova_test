<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');

Route::get('flat/index',[\App\Http\Controllers\FlatIndexController::class, 'index'])->name('flat.index');
Route::get('flat/show/{id}',[\App\Http\Controllers\FlatShowController::class, 'show'])->name('flat.show');

Route::get('realty/index',[\App\Http\Controllers\RealtyIndexController::class,'index'])->name('realty.index');
Route::get('realty/show/{id}',[\App\Http\Controllers\RealtyShowController::class,'show'])->name('realty.show');
Route::get('blog/index',[\App\Http\Controllers\BlogIndexController::class,'index'])->name('blog.index');
Route::get('blog/show/{id}',[\App\Http\Controllers\BlogShowController::class,'show'])->name('blog.show');
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
