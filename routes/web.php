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

// Esta ruta responde a la raíz del sitio y devuelve la versión de Lumen
$router->get('/', function () use ($router) {
    return $router->app->version();
});

// Esta ruta responde a la URL 'reddits/getall' y llama al método 'getAllReddits' del controlador 'RedditsController'
$router->get('reddits/getall','RedditsController@getAllReddits');

