<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.login');
});

Route::get('/main', 'MainController@index');

Route::post('/main/checklogin', 'MainController@checklogin');
Route::get('main/logout', 'MainController@logout');

Route::get('main/register', 'MainController@register');
Route::post('main/singup', 'MainController@singup');


Route::resource('/news','NewsController');
Route::get('/life', 'NewsController@life')->name('life');
Route::get('/politics', 'NewsController@politics')->name('politics');
Route::get('/sports', 'NewsController@sports')->name('sports');
Route::get('/magazine', 'NewsController@magazine')->name('magazine');

