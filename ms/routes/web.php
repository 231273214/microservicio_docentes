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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('Docente','docentesController@index');
$router->post('Docente','docenteController@store');
$router->put('Docente/{id}','docenteController@update');
$router->delete('Docente/{id}','docenteController@destroy');

$router->get('Ocupaciones','docentesController@index');
$router->post('Ocupaciones','docenteController@store');
$router->put('Ocupaciones/{id}','docenteController@update');
$router->delete('/{id}','docenteController@destroy');
