<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\FlatIndexController;
use App\Http\Controllers\FlatShowController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComplexIndexController;
use App\Http\Controllers\ComplexShowController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->name('home');

Route::get('flats',[FlatIndexController::class, 'index'])->name('flats');
Route::get('flats/{slug}',[FlatShowController::class, 'single'])->name('flat.single');

Route::get('complexes',[ComplexIndexController::class,'index'])->name('complexes');
Route::get('complexes/{slug}',[ComplexShowController::class,'single'])->name('complex.single');

Route::get('posts',[PostController::class,'index'])->name('posts');
Route::get('post/{slug}',[PostController::class,'single'])->name('post.single');

