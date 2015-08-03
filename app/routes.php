<?php


Route::get('/', array('uses'=>'RegisterController@getHome'));
Route::controller('users','RegisterController');

Route::get('register/verify/{confirmationCode}', [
	'as' => 'confirmation_path',
	'uses' => 'RegisterController@confirm'
]);
