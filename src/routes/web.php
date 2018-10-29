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

$router->get('/', 'MainController@index');

$router->get('/about', 'AboutController@index');

$router->get('/blog', 'BlogController@index');

Route::get('/contact', function () {
    return view('contact.index');
});