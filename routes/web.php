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
			'as' => '.auth'
		], function() {

		Route::get('/login', 'AuthController@login')->name('.login');
		Route::post('/login', 'AuthController@authenticate')->name('.authenticate');

	});
	
	Route::get('/', 'DashboardController@show');

});