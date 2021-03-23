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

Route::get('/','pagesController@getIndex')->name('index') ;



Route::get('login', function () {
  
    return view('login');
});

Route::get('help','pagesController@getHelp')->name('help');
  
Route::get('about','pagesController@getAbout')->name('about');

Route::get('contact', 'contactController@showForm')->name('contact.show');
Route::post('contact', 'ContactController@sendEmail')->name('contact.send'); 


Route::get('joinTutor','pagesController@getJoinTutor')->name('joinTutor');
Route::get('joinParent','pagesController@getJoinParent')->name('joinParent');


