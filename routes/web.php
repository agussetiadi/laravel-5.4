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

Route::get('/', 'Home@main');
Route::get('/home', 'Home@main');


Route::get('/users/', 'Users@main');

/*Route::get('/users/all/{id}', 'Users@all');*/
