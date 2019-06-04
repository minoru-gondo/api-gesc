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

$router->get('/', function () use ($router) {
  return $router->app->version();
});


$router->group(['prefix' => '/api'], function () use ($router) {
  $router->get('/cursos', 'CursosController@index');
  $router->post('/cursos/add', 'CursosController@store');
  $router->get('/cursos/{id}', 'CursosController@show');
  $router->put('/cursos/{id}', 'CursosController@update');
  $router->delete('/cursos/{id}', 'CursosController@destroy');

  $router->get('/alunos', 'AlunosController@index');
  $router->post('/alunos/add', 'AlunosController@store');
  $router->get('/alunos/{id}', 'AlunosController@showById');  
  $router->get('/alunos/{id}', 'AlunosController@showByCPF');  
  $router->put('/alunos/{id}', 'AlunosController@update');  
  $router->delete('/alunos/{id}', 'AlunosController@destroy');  

  $router->get('/matriculas', 'MatriculasController@index');
  $router->post('/matriculas/add', 'MatriculasController@store');
  $router->get('/matriculas/{id}', 'MatriculasController@show');
  $router->put('/matriculas/{id}', 'MatriculasController@update');
  $router->delete('/matriculas/{id}', 'MatriculasController@destroy');

});
