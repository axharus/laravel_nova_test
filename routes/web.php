<?php


use App\Http\Controllers\site\FlatShowController;
use App\Http\Controllers\site\ComplexIndexController;
use App\Http\Controllers\site\ComplexShowController;
use App\Http\Controllers\site\FlatIndexController;
use App\Http\Controllers\site\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\site\PostController;


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

