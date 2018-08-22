<?php

Route::group([
		'prefix' => 'kl_admin'
	], function() {

		Route::get('/', function() {
			return 'Sample admin page';
		});

});