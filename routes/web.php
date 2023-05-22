<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/comics', function(){
    $products = config('comics');
    return view('comics', compact('products'));
})->name('comics');
