<?php

Route::group([
		'prefix' => 'kl_admin',
		'namespace' => 'Xeight8\Kladmin\Http\Controllers'
	], function() {

		Route::get('/', 'DashboardController@show');

});