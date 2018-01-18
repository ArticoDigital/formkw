<?php


Route::get('/', 'HomeController@index')->name('home');
Route::post('formUpdate', 'FormController@update')->name('formUpdate');

Route::get('descargar-excel/{token}','FormController@download')->name('downloadExcel');
