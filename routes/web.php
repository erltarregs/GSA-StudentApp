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

Route::get('/', 'PagesController@getIndex')->name('homepage');
Route::resource('students', 'StudentController');
//Route::get('student', 'StudentController@index')->name('studentapp');
Route::get('students/create', 'StudentController@create')->name('students.create');
Route::post('students/store', 'StudentController@store')->name('students.store');
Route::get('students/{$id}', 'StudentController@show')->name('students.show');
Route::post('students/{$id}', 'StudentController@destroy')->name('students.destroy');
Route::get('students/{$id}/edit', 'StudentController@edit')->name('students.edit');

Route::get('about', 'PagesController@getAbout')->name('about');
Route::get('contact', 'PagesController@getContact')->name('contact');
Route::get('frequently-asked-questions', 'PagesController@getFAQ')->name('FAQ');
