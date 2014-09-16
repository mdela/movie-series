<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', array(
	'as'=>'home',function()
	{
		return View::make('site.users.inicio');
	}));
//

// Confide routes users
	Route::get('/users/create', 				'UsersController@create');
	Route::post('users', 						'UsersController@store');
	Route::post('users/login', 					'UsersController@doLogin');
	Route::get('users/confirm/{code}', 			'UsersController@confirm');
	
	Route::post('users/forgot_password', 		'UsersController@doForgotPassword');
	Route::get('users/reset_password/{token}',	'UsersController@resetPassword');
	Route::post('users/reset_password',			'UsersController@doResetPassword');
	
	Route::get('forgot', 						array('as' => 'forgot',			'uses' => 'UsersController@forgotPassword'));
	Route::get('logout', 						array('as' => 'logout',			'uses' => 'UsersController@logout'));
	Route::get('login', 						array('as' => 'login',			'uses' => 'UsersController@login'));


//  Movies routes

	Route::get('movie', 					array('as' => 'movie',			'uses' => 'MovieController@get_index'));
	Route::get('movie/create', 				array('as' => 'movie.create', 	'uses' => 'MovieController@get_create'));
	Route::get('movie/update/{id_movie}', 	array('as' => 'movie.update', 	'uses' => 'MovieController@get_update'));
	Route::get('movie/view/{id_movie}',		array('as' => 'movie.view', 	'uses' => 'MovieController@get_view'));
	Route::get('movie/delete/{id_movie}',	array('as' => 'movie.delete', 	'uses' => 'MovieController@get_delete'));
	Route::post('movie/save',				array('as' => 'movie.save', 	'uses' => 'MovieController@post_save'));


// Confide routes series
