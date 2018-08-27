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

			Route::get('/logout', 'AuthController@logout')->name('.auth.logout');

		});
	});

	Route::group([
			'middleware' => 'isLoggedIn'
		], function() {

		

		Route::get('/', 'AdminController@dashboard');

	});
});