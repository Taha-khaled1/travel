<?php

use App\Http\Controllers\Api\FlutterAppController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::controller(FlutterAppController::class)->group(function () {



    Route::get('adventures', 'adve')->name('adventures');
    Route::get('boats', 'shep')->name('boats');
    Route::get('trips', 'trip')->name('trips');
    Route::get('catogery', 'catogery')->name('catogery');
    Route::get('tripdetalis/{id}', 'showdetalis')->name('tripdetalis');
    Route::get('searchnameorcountrey', 'search')->name('searchnameorcountrey');
    Route::post('booktrip', 'booktrip')->name('booktrip');

   



    // Route::post('updateviews/{id}', 'updateViews')->name('updateviews');

    // Route::post('addenqueris', 'addenqueris')->name('addenqueris');
    // Route::post('addtrip', 'store')->name('addtrip');
    // Route::get('mostview', 'getMostViewedProperties')->name('mostview');
    })->middleware(['auth:sanctum']);