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

Route::get('/', 'HomeController@index') ;
Route::get('/gallery', 'HomeController@gallery') ;
Route::get('/news', 'HomeController@news') ;


Route::get('/admin', 'AdminController@index') ;
Route::post('/admin-login-check', 'AdminController@adminloginCheck') ;

Route::get('/dashboard', 'SuperAdminController@index') ;
Route::get('/add-category', 'SuperAdminController@addCategory') ;
Route::get('/logout', 'SuperAdminController@logout') ;



