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
    return view('welcome');
});

Route::get('/addcontact', 'AdminController@addcontact');

Route::get('/allcontact', 'AdminController@allcontact');

Route::get('/dashboard', 'AdminController@dashboard');
Route::post('/save_contact', 'AdminController@save_contact');
Route::get('/delete_contact/{contact_id}', 'AdminController@delete_contact');
Route::get('/edit_contact/{contact_id}', 'AdminController@edit_contact');
Route::post('/contact_update/{contact_id}', 'AdminController@contact_update');

