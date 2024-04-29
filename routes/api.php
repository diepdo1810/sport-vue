<?php

use App\Http\Controllers\Api\TeamsController;
use App\Http\Controllers\Api\TimezoneController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can regiseasonss, [TeamsController::class, 'seasons'])->name('teams.seasons');ter API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['prefix' => 'v1'], function () {
    Route::get('timezones', [TimezoneController::class, 'index'])->name('timezones.index');
    Route::group(['prefix' => 'teams'], function () {
        Route::get('/information', [TeamsController::class, 'information'])->name('teams.information');
        Route::post('/statistics', [TeamsController::class, 'statistics'])->name('teams.statistics');
        Route::post('/seasons', [TeamsController::class, 'seasons'])->name('teams.seasons');
        Route::get('/countries', [TeamsController::class, 'countries'])->name('teams.countries');
    });
});
