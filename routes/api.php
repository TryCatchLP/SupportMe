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
Route::put("/huecas/{id}", "HuecaController@update");
Route::delete("/huecas/{id}", "HuecaController@destroy");

//================ CRUD Ratings =======================

Route::middleware('auth:api')->get('ratings', 'RatingsController@index');
Route::middleware('auth:api')->get('ratings/{id}', 'RatingsController@show');
Route::middleware('auth:api')->post('ratings', 'RatingsController@store');
Route::middleware('auth:api')->put('ratings/{id}', 'RatingsController@update');
Route::delete('ratings/{id}', 'RatingsController@delete');

//================ CRUD Menuses =======================

Route::get("/menuses", "MenusesController@index");
Route::get("/menuses/{id}", "MenusesController@show");
Route::post("/menuses", "MenusesController@store");
Route::put("/menuses/update/{id}", "MenusesController@update");
Route::delete("/menuses/delete/{id}", "MenusesController@delete");

//================ Login and register =======================

Route::post('login', 'Auth\UserController@login');
Route::post('profile', 'Auth\UserController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('profile', 'Auth\UserController@details');
    Route::put('profile', 'Auth\UserController@update');
});

Route::name('nologin')->get('/nologin', function(Request $request){
    return response()->json(['error'=>'Unauthorised'], 401);
});

//================ CRUD Huecasmenuses =======================
Route::get('/menu/hueca/{id}', 'HuecaMenuController@showall');
Route::put('/menu/hueca', 'HuecaMenuController@update');
