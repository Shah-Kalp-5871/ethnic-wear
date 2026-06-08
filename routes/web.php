<?php

use Illuminate\Support\Facades\Route;

// Default fallback to new design
Route::get('/', function () {
    return redirect('/new');
});

// Old Design Routes
Route::prefix('old')->group(function () {
    Route::get('/', function () {
        return view('old.home.index');
    });

    Route::get('/product/{id?}', function ($id = null) {
        return view('old.product.show', ['id' => $id]);
    })->name('old.product.show');

    Route::get('/product2/{id?}', function ($id = null) {
        return view('old.product.show2', ['id' => $id]);
    })->name('old.product.show2');

    Route::get('/product3/{id?}', function ($id = null) {
        return view('old.product.show3', ['id' => $id]);
    })->name('old.product.show3');
});

// New Design Routes
Route::prefix('new')->group(function () {

    Route::get('/product', function () {
        return view('new.product.show');
    })->name('new.product.show');

    Route::get('/', function () {
        return view('new.home.index');
    });

    Route::get('/product/{id?}', function ($id = null) {
        return view('new.product.show', ['id' => $id]);
    })->name('new.product.show');

    Route::get('/product2/{id?}', function ($id = null) {
        return view('new.product.show2', ['id' => $id]);
    })->name('new.product.show2');

    Route::get('/product3/{id?}', function ($id = null) {
        return view('new.product.show3', ['id' => $id]);
    })->name('new.product.show3');

    Route::get('/refrence/home', function () {
        return view('new.refrence.home');
    })->name('new.refrence.home');

    Route::get('/refrence/product-details', function () {
        return view('new.refrence.product-deatils');
    })->name('new.refrence.product-details');
});
