<?php
Route::group([

    'namespace' => 'Auth',
    'prefix' => 'auth'

], function () {

    Route::post('signin', 'SignInController');
    Route::post('signout', 'SignOutController');
    Route::get('my', 'MyController');

});