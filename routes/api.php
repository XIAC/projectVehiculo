<?php

use Illuminate\Http\Request;

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

Route::get('usuario/obtener', 'UsuarioController@index');
Route::post('usuario/guardar', 'UsuarioController@guardar');

Route::post('vehiculo/mostrar/{id}', 'VehiculoController@show');
Route::post('vehiculo/guardar', 'VehiculoController@create');
