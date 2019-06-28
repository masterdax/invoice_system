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

Route::get('/','PageController@index')->name('index');
Route::get('/about','PageController@about')->name('about');
Route::get('/gallery','PageController@gallery')->name('gallery');

//create controller for mainfooter message
Route::resource('/msg','CreateController');
//Contact Controller for Contact message controller
Route::resource('/contact','ContactController');



Auth::routes();

Route::group(['middleware' =>['PreventBackButton','auth']], function(){
	Route::get('/home', 'HomeController@index')->name('home');
	Route::resource('/client','ClientDetailController');
	Route::resource('/message','LeaveMessageController');
	Route::resource('/bank','BankDetailController');
	Route::resource('/product','ProductController');
	Route::resource('/invoice','InvoiceController');
	Route::get('/create-invoice','InvoiceController@createInvoice');
	Route::post('/store-invoice','InvoiceController@saveInvoice');
	Route::get('/generate-invoice/{id}','InvoiceController@generateInvoice');
});