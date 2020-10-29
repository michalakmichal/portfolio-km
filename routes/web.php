<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\AlbumController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// API
Route::group(['prefix' => 'api'], function() {
    //Album
    Route::get('/album/{id}', [AlbumController::class, 'show']);
    Route::get('/album', [AlbumController::class, 'index']);
    //Image

    //Labels
});

Route::match(['get', 'post'], '/botman', 'BotManController@handle');
Route::get('/{any}', function () {
    return view('frontend');
})->where('any', '.*');