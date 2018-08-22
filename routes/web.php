<?php

Route::group([
		'prefix' => 'kl_admin',
		'namespace' => 'Xeight8\Kladmin\Http\Controllers',
		'as' => 'kladmin'
	], function() {

	// authentication
	Route::group([
			'namespace' => 'Auth',
			'as' => '.auth'
		], function() {

		Route::get('/login', 'AuthController@login')->name('.login');

	});
	
	Route::get('/', 'DashboardController@show');

});