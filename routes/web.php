<?php


Route::get('/', 'HomeController@index')->name('home');
Route::post('formUpdate', 'FormController@update')->name('formUpdate');


