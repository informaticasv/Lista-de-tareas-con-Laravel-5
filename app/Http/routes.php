<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
// 	'auth' => 'Auth\AuthController',
// 	'password' => 'Auth\PasswordController',
// ]);


Route::bind('id', function($id){
	$todo = App\Todo::whereSlug($id)->first();
	if($todo)
		return $todo;
	abort(404);
});

get('/', ['as' => 'inicio', 'uses' => 'TodoController@index']);

get('/to-do/crear', ['as' => 'nuevaTarea', 'uses' => 'TodoController@nueva']);
post('/to-do/crear', ['as' => 'guardarTarea', 'uses' => 'TodoController@guardar']);

get('/to-do/{id}', ['as' => 'editarTarea', 'uses' => 'TodoController@editar']);
put('/to-do/{id}', ['as' => 'actualizarTarea', 'uses' => 'TodoController@actualizar']);


