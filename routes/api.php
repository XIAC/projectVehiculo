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
Route::post('vehiculo/mostrarusuario', 'VehiculoController@listarUsuarioVehiculos');
Route::post('vehiculo/mostrarmodelos', 'VehiculoController@listarModelos');

Route::post('user/create', 'AuthController@create');

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});
