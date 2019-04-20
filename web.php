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

Route::get("/home","blue@home");
Route::get("/aboutus","blue@aboutus");
Route::get('/index','StaticConroller@index');

Route::get('/', function () {
    return view('welcome');
});

/*
GET REQUESTS
*/

Route::get('/forms', 'FormController@Home');


/*

POST, PUT and DELETE REQUESTS

*/

Route::post('/forms', 'FormController@StoreData');

// Route::post('/forms/destroy', 'FormController@Destroy');

