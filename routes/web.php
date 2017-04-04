<?php

Route::get('/mail', function () {
    return view('preview');
});

Auth::routes();

Route::get('/', 'DashboardController@index');

Route::get('themes/new', 'ThemesController@create')->name('themes.create');
Route::post('themes', 'ThemesController@store')->name('themes.store');
Route::get('themes/{theme}', 'ThemesController@edit')->name('themes.edit');
