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

//Route::get('/', function () {
 //   return view('');
//});

Route::view('/', 'welcome')->name('welcome');
Route::view('/applicants', 'applicants')->name('applicants');
Route::post('/applicants', 'ApplicantsController@store');
//Route::view('/vendor/mail/html/message', 'message')->name('message');
//Route::view('/vendor/mail/html/transfer', 'transfer')->name('transfer');


//Route::view('/applicants', 'applicants')->name('applicants');
//Route::post('/applicants', 'ApplicantsController@store');
//Route::view('emails/confirm', 'confirm')->name('confirm');

//Route::view('/emails/message-received', 'message-received')->name('message-received');
//Route::view('/emails/sendmail', 'sendmail')->name('sendmail');

//Route::view('/vendor/mail/html/message', 'message')->name('message');