<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('themes/preview', 'Api\ThemesController@index');

Route::get('themes/colors', 'Api\ColorsController@index');

Route::get('themes/css-colors', 'Api\ThemesController@cssColors');

Route::get('themes/{theme}', 'Api\ThemesController@show');

Route::get('themes/{theme}/css', 'Api\ThemesController@css');

Route::get('themes/{theme}/colors', 'Api\ColorsController@show');

Route::patch('themes/{theme}/colors/{color}', 'Api\ColorsController@patch');