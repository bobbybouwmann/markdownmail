<?php

Route::get('/mail', function () {
    return view('preview');
});

Auth::routes();

Route::get('/', 'DashboardController@index');

Route::get('themes/{theme}', 'ThemesController@edit')->name('themes.edit');
