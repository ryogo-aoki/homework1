<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//Route::group(['middleware' => ['api']], function(){
//  Route::get('good', 'App\Http\Controllers\GoodController@index');
//  Route::resource('good', 'App\Http\Controllers\GoodController',['except' => ['create', 'edit']]);
//});


Route::get('good', 'App\Http\Controllers\GoodController@index');
Route::resource('good', 'App\Http\Controllers\GoodController');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
    Route::get('good', 'App\Http\Controllers\GoodController@index');
    Route::resource('good', 'App\Http\Controllers\GoodController');
});
