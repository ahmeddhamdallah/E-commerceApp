<?php
Route::group(['prefix' => 'admin'], function () {

    Config::set('auth.defines', 'admin');

    Route::get('/', function () {
        return view('admin.home');
    });

});
