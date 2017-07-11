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

Route::group(['namespace'=>'Home'], function(){
         Route::get('/', 'HomeController@index');
         Route::get('index', 'HomeController@index');
         Route::get('create', 'HomeController@create');
         Route::get('success', 'HomeController@success');
         Route::get('passport', 'HomeController@passport');
         Route::get('detail/{id}', 'HomeController@detail');
         Route::post('upload', 'FileController@upload');
});
Route::group(['prefix'=>'admin','namespace' => 'Admin'], function(){
         Route::get('index', 'AdminController@index');
});
Route::get('mail/send','MailController@send');

Auth::routes();

Route::get('/home', 'HomeController@index');

