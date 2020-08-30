<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\User;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("/huecas", "HuecaController@index");
Route::get("/huecas/{id}", "HuecaController@show");
Route::post("/huecas", "HuecaController@store");
Route::put("/huecas/update/{id}", "HuecaController@update");
Route::delete("/huecas/delete/{id}", "HuecaController@destroy");

//================ CRUD Ratings =======================

Route::get('ratings', 'RatingsController@index');
Route::get('rating/{id}', 'RatingsController@show');
Route::post('ratings', 'RatingsController@store');
Route::put('rating/{id}', 'RatingsController@update');
Route::delete('rating/{id}', 'RatingsController@delete');

//================ CRUD Menuses =======================

Route::get("/menuses", "MenusesController@index");
Route::get("/menuses/{id}", "MenusesControlle@show");
Route::post("/menuses", "MenusesControlle@store");
Route::put("/menuses/update/{id}", "MenusesControlle@update");
Route::delete("/menuses/delete/{id}", "MenusesControlle@delete");

//================ Login and register =======================

Route::post('login', 'Auth\UserController@login');
Route::post('register', 'Auth\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::post('details', 'Auth\UserController@details');
});