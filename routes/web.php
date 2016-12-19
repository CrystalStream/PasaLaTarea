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
    return view('main.index');
});

Route::group(['prefix' => 'admin', 'middleware' => ['admin','guest','auth']], function(){
	Route::resource('career', 'CareerController');
	Route::resource('semester', 'SemesterController');
	Route::resource('subject','SubjectController');
});
Auth::routes();
Route::get('/logout' , 'Auth\LoginController@logout');


Route::get('/final_reset' , 'Auth\ResetPasswordController@reset_success');
Route::get('/home', 'HomeController@index');
