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

Route::get('/adminlogin','AdminController@adminlogin');
Route::post('/authadmincontroller','AuthAdminController@adminlogin');
Route::get('/adminhome','AdminController@adminhome');
Route::get('/adminlogout','AuthAdminController@adminlogout');

Route::get('/addcategories','AdminController@addcategories');
Route::post('/postaddcategories','AdminController@postaddcategories');

Route::get('/addproduct','AdminController@addproduct');
Route::post('/postaddproduct','AdminController@postaddproduct');
Route::get('/updateProductView/{id}','AdminController@updateProductView');
Route::post('/updateProduct/{id}','AdminController@updateProduct');



