<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/product/{id?}', function ($id = null) {
    return view('product.show', ['id' => $id]);
})->name('product.show');

Route::get('/product2/{id?}', function ($id = null) {
    return view('product.show2', ['id' => $id]);
})->name('product.show2');

Route::get('/product3/{id?}', function ($id = null) {
    return view('product.show3', ['id' => $id]);
})->name('product.show3');
