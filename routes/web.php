<?php

Route::group([
		'prefix' => 'kl_admin',
		'namespace' => 'Xeight8\Kladmin\Http\Controllers',
		'as' => 'kladmin',
		'middleware' => 'web'
	], function() {

	// authentication
	Route::group([
			'namespace' => 'Auth',
			'as' => '.auth',
			
		], function() {

		//log in
		Route::group([
				'middleware' => 'isGuest'
			], function() {

			Route::get('/login', 'AuthController@login')->name('.login');
			Route::post('/login', 'AuthController@authenticate')->name('.authenticate');

		});
		
		//log out
		Route::group([
				'middleware' => 'isLoggedIn'
			], function() {

			Route::get('/logout', 'AuthController@logout')->name('.logout');

		});
	});

	// admin
	Route::group([
			'middleware' => 'isLoggedIn'
		], function() {		

		Route::get('/', 'AdminController@dashboard')->name('.dashboard');

		// page builder
		Route::group([
				'namespace' => 'PageBuilder',
				'prefix' => 'pagebuilder',
				'as' => '.pagebuilder'
			], function() {

			Route::get('/', 'PageBuilderController@index')->name('.index');
			//Route::get('/', 'PageBuilderController@create')->name('.create');
			//Route::post('/', 'PageBuilderController@store')->name('.store');
			//Route::get('/edit/{slug}', 'PageBuilderController@edit')->name('.edit');

		});
	});
});