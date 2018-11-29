<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/first-page','FirstController@index')->name('first-page');

