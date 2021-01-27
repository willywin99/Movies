<?php

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

$router->group(['prefix' => 'api/v1', 'namespace' => 'v1'], function() use ($router) {

    $router->get('/movies', 'MovieController@index');
    $router->post('/movies', 'MovieController@store');
    $router->put('/movies/{id}', 'MovieController@update');
    $router->delete('/movies/{id}', 'MovieController@destroy');
    $router->get('/movies/{id}', 'MovieController@show');

});
