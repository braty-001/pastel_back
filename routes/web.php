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

$router->group(['prefix' => 'Customers'], function () use ($router) {
    $router->get('/', 'CustomersController@list');
    $router->get('/{id}', 'CustomersController@get');
    $router->post('/', 'CustomersController@create');
    $router->put('/', 'CustomersController@alter');
    $router->delete('/', 'CustomersController@delete');
});

$router->group(['prefix' => 'Products'], function () use ($router) {
    $router->get('/', 'ProductsController@list');
    $router->get('/{id}', 'ProductsController@get');
    $router->post('/', 'ProductsController@create');
    $router->put('/', 'ProductsController@alter');
    $router->delete('/', 'ProductsController@delete');
});
