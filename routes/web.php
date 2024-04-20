<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['prefix' => '/'], function () {
    Route::get('/', function () {
        return view('layouts.app');
    })->name('home');

    Route::get('/fixtures', function () {
        return view('fixtures.index');
    })->name('fixtures');

    Route::get('/live-tv', function () {
        return view('lives.index');
    })->name('live-tv');

    Route::get('/highlights', function () {
        return view('highlights.index');
    })->name('highlights');

    Route::get('/payment', function () {
        return view('payments.index');
    })->name('payment');
});
