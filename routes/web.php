<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace'=>'App\Http\Controllers','prefix'=>'house'],function (){
    $methods = ['index','show'];
    Route::resource('index','HouseController')->only($methods)->names('house');

});

Route::get('/home', [\App\Http\Controllers\HouseController::class, 'home'])->name('home');
Route::get('/filter', [\App\Http\Controllers\HouseController::class, 'filter'])->name('filter');
