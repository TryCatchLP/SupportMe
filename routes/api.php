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

