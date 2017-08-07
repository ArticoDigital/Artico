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

Route::get('/', 'HomeController@home');
Route::get('/contacto', 'HomeController@contact');
Route::get('/servicios/diseño-pagina-web-bogota', 'HomeController@wedo');
Route::get('/servicios/desarrollo-aplicaciones-bogota', 'HomeController@apps');
Route::get('/servicios/marketing-digital', 'HomeController@marketing');
Route::post('/contactProject', [
    'as' => 'contactProject',
    'uses' => 'HomeController@contactProject'
]);
Route::post('/contactMessage', [
    'as' => 'contactMessage',
    'uses' => 'HomeController@contactMessage'
]);
