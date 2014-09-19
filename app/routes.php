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

//HOME Page
	Route::get('home',array('as' => 'home', function()
	{
		// Return about us page
		return View::make('default.home');
	}));
	
	// Principal page
	Route::get('principal', array('as' => 'principal', 'before' => 'auth', function()
	{
		if(Entrust::hasRole('User')) {
				return View::make('site.users.index');
			}
			else if(Entrust::hasRole('Admin')) {
				$users= User::paginate(2);
				return View::make('admin.users.index')->with('users',$users);
			}
			else {
				Auth::logout();
				return Redirect::action('/')->with('flash_notice', 'You don\'t have access!');
			}
	 
		return App::abort(403);
	}));

// Confide routes users
	Route::get('/users/create', 				array('as' => 'create',			'uses' => 'UsersController@create'));
	Route::post('users', 						array('as' => 'store',			'uses' => 'UsersController@store'));
	
	
	Route::get('users/forgot_password',			array('as' => 'forgot_pass',	'uses' => 'UsersController@forgotPassword'));
	Route::post('users/forgot_password',		array('as' => 'forgot_password','uses' => 'UsersController@doForgotPassword'));

	Route::get('users/reset_password/{token}',	array('as' => 'reset.pass',		'uses' => 'UsersController@resetPassword'));
	Route::post('users/reset_password',			array('as' => 'doreset.pass',	'uses' => 'UsersController@doResetPassword'));
	
	//Route::get('forgot', 						array('as' => 'forgot',			'uses' => 'UsersController@forgotPassword'));
	
	Route::get('login', 						array('as' => 'login',			'uses' => 'UsersController@login'));
	Route::post('users/login', 					array('as' => 'do.login',		'uses' => 'UsersController@doLogin'));
	
	Route::get('users/confirm/{code}', 			array('as' => 'confirm',		'uses' => 'UsersController@confirm'));
	
	Route::get('logout', 						array('as' => 'logout',			'uses' => 'UsersController@logout'));
	


//  Movies routes
	
	Route::group(array('/' => 'movie'), function()
	{
		Route::get('movie', 					array('as' => 'movie',			'uses' => 'MovieController@get_index'));
		Route::get('movie/create', 				array('as' => 'movie.create', 	'uses' => 'MovieController@get_create'));
		Route::get('movie/update/{id_movie}', 	array('as' => 'movie.update', 	'uses' => 'MovieController@get_update'));
		Route::get('movie/view/{id_movie}',		array('as' => 'movie.view', 	'uses' => 'MovieController@get_view'));
		Route::get('movie/delete/{id_movie}',	array('as' => 'movie.delete', 	'uses' => 'MovieController@get_delete'));
		Route::post('movie/save',				array('as' => 'movie.save', 	'uses' => 'MovieController@post_save'));
	});
	
	
	//
	Route::when('/movies*', 'can_edit');
	Route::group(array('/' => 'movie'), function()
	{
		Route::get('movie', 					array('as' => 'movie',			'uses' => 'MovieController@get_index'));
		Route::get('movie/create', 				array('as' => 'movie.create', 	'uses' => 'MovieController@get_create'));
		Route::get('movie/update/{id_movie}', 	array('as' => 'movie.update', 	'uses' => 'MovieController@get_update'));
		Route::get('movie/view/{id_movie}',		array('as' => 'movie.view', 	'uses' => 'MovieController@get_view'));
		Route::get('movie/delete/{id_movie}',	array('as' => 'movie.delete', 	'uses' => 'MovieController@get_delete'));
		Route::post('movie/save',				array('as' => 'movie.save', 	'uses' => 'MovieController@post_save'));
			
	});

// Entrust roles

	Route::get('/', array(
	'as'=>'home',function()
	{
		$admin = new Role();
		$admin->name = 'Admin';
		$admin->save();
	  
		$user = new Role();
		$user->name = 'User';
		$user->save();
	  
		$read = new Permission();
		$read->name = 'can_read';
		$read->display_name = 'Can Read Data';
		$read->save();
	  
		$edit = new Permission();
		$edit->name = 'can_edit';
		$edit->display_name = 'Can Edit Data';
		$edit->save();
	  
		$user->attachPermission($read);
		$admin->attachPermission($read);
		$admin->attachPermission($edit);
	 
		$adminRole 	= DB::table('roles')->where('name', '=', 'Admin')->pluck('id');
		$userRole 	= DB::table('roles')->where('name', '=', 'User')->pluck('id');
		// print_r($userRole);
		// die();
	  
		$user1 = User::where('username','=','admin')->first();
		$user1->roles()->attach($adminRole);
		$user2 = User::where('username','!=','admin')->first();
		$user2->roles()->attach($userRole);

		
		
	}));
	
		
	


	
	
	
