<?php

Route::get('login/{provider}', 'AuthController@redirectToProvider')->name('login');
Route::get('login/{provider}/callback', 'AuthController@handleProviderCallback');
Route::post('logout', 'AuthController@logout')->name('logout');

Route::get('/', 'DashboardController@index')->name('dashboard')->middleware('guest');

Route::group(['middleware' => 'auth'], function () {

    Route::get('themes', 'ThemesController@index')->name('themes.index');
    Route::get('themes/new', 'ThemesController@create')->name('themes.create');
    Route::post('themes', 'ThemesController@store')->name('themes.store');
    Route::get('themes/{theme}/editor', 'ThemesController@editor')->name('themes.editor');
    Route::get('themes/{theme}/edit', 'ThemesController@edit')->name('themes.edit');
    Route::patch('themes/{theme}', 'ThemesController@update')->name('themes.update');
    Route::delete('themes/{theme}', 'ThemesController@destroy')->name('themes.destroy');

});
