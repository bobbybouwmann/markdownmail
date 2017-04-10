<?php

Route::get('login/{provider}', 'AuthController@redirectToProvider')->name('login');
Route::get('login/{provider}/callback', 'AuthController@handleProviderCallback');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::get('themes', 'ThemesController@index')->name('themes.index');
Route::get('themes/new', 'ThemesController@create')->name('themes.create');
Route::post('themes', 'ThemesController@store')->name('themes.store');
Route::get('themes/{theme}', 'ThemesController@edit')->name('themes.edit');
