<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/map', function () {
    return view('map.google');
});

Route::get('/map1', function () {
    return view('map.google1');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/hotmap', 'HomeController@hotmap');

Route::get('/model', 'HomeController@model');
