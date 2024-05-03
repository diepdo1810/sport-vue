<?php

use App\Http\Controllers\Api\TeamsController;
use App\Http\Controllers\Api\TimezoneController;
use App\Http\Controllers\Api\FixturesController;
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

    // teams
    Route::group(['prefix' => 'teams'], function () {
        Route::get('/', [TeamsController::class, 'index'])->name('teams.index');
//        Route::get('/information', [TeamsController::class, 'information'])->name('teams.information');
        Route::post('/statistics', [TeamsController::class, 'statistics'])->name('teams.statistics');
        Route::post('/seasons', [TeamsController::class, 'seasons'])->name('teams.seasons');
        Route::get('/countries', [TeamsController::class, 'countries'])->name('teams.countries');
    });

    // fixtures
    Route::group(['prefix' => 'fixtures'], function () {
        Route::post('/', [FixturesController::class, 'index'])->name('fixtures.index');
        Route::get('/rounds', [FixturesController::class, 'rounds'])->name('fixtures.rounds');
        Route::post('/head-to-head', [FixturesController::class, 'headToHead'])->name('fixtures.head-to-head');
        Route::post('/statistics', [FixturesController::class, 'statistics'])->name('fixtures.statistics');
        Route::post('/events', [FixturesController::class, 'events'])->name('fixtures.events');
        Route::post('/lineups', [FixturesController::class, 'lineups'])->name('fixtures.lineups');
        Route::post('/players', [FixturesController::class, 'players'])->name('fixtures.players');
    });
});
