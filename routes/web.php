<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->group(['middleware' => 'cors'], function () use ($router) {
    $router->get('/', function () use ($router) {
        return $router->app->version();
    });

    $router->get('docente', 'EstudianteController@index');
    $router->get('docente/{id}', 'EstudianteController@show');
    $router->post('docente', 'EstudianteController@store');
    $router->put('docente/{id}', 'EstudianteController@update');
    $router->delete('docente/{id}', 'EstudianteController@destroy');

    // Agrega la ruta OPTIONS para manejar preflight requests
    $router->options('/{any:.*}', function () {
        return response('OK', 200)
            ->header('Access-Control-Allow-Origin', '*')
            ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
            ->header('Access-Control-Allow-Headers', 'Content-Type, Authorization');
    });
});
