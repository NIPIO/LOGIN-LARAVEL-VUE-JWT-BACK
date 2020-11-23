<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Encuentros;

Route::group([
	'middleware' => 'cors',
    'namespace' => 'Encuentros',
    'prefix' => 'encuentros'

], function () {

	Route::get('/', function() {
	    return Encuentros::all();
	});
    Route::get('/ver/{id}', function($id) {
	    return Encuentros::find($id);
	});

    Route::post('/nuevo', 'EncuentrosController@createPost');

});


Route::group([
	'middleware' => 'cors',
    'namespace' => 'Auth',
    'prefix' => 'auth'

], function () {

    Route::post('signin', 'SignInController');
    Route::post('signout', 'SignOutController');
    Route::get('my', 'MyController');

});