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

/**
 * API Routes
 */
require __DIR__ . '/api.php';

/**
 * Web Routes
 */
Route::get('/phpinfo', function () {
    return phpinfo();
});

/**
 * Catch all routes
 */
Route::get('{any}', function () {
    return view('layouts.app');
})->where('any', '.*');
