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

Route::get('/', 'MainController@index')->middleware('guest');

Route::group(['prefix' => 'admin', 'middleware' => ['admin','guest','auth']], function(){
	Route::resource('careers', 'CareerController');
	Route::resource('semesters', 'SemesterController');
	Route::resource('subjects','SubjectController');
});
Auth::routes();
Route::get('/logout' , 'Auth\LoginController@logout');
Route::get('/final_reset' , 'Auth\ResetPasswordController@reset_success');

Route::group(['prefix' => 'home'], function(){
	Route::get('/', 'HomeController@home');
	Route::resource('subject', 'Frontend\SubjectsController', ['only' => ['index', 'show']]);
	Route::resource('subject.semester', 'Frontend\SubjectSemesterController', ['only' => ['index', 'show']]);
});
Route::get('/search' , 'HomeController@search')->name('search');

