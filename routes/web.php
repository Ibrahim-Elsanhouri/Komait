<?php
use RealRashid\SweetAlert\Facades\Alert;

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
    return view('index');
});
Route::get('/login', function () {
    return view('login');

});
Route::get('/contact' , 'ContactController@index'); 
Route::post('/contact' , 'ContactController@store')->name('contact.store');
Route::get('/register' , 'UserController@getRegister'); 
Route::post('/register' , 'UserController@postRegister')->name('user.register');
//verifyEmail
Route::get('/verifyEmail/{token}' , 'UserController@verifyEmail')->name('user.verify'); 

Route::get('/consultant' , 'ConsultantController@create')->name('consultant.create'); 
Route::post('/consultant' , 'ConsultantController@store')->name('consultant.store'); 
Route::get('/myconsultants' , 'ConsultantController@myconsultants')->name('consultant.myconsultants'); 
//consultant_notes
Route::get('/consultant_notes/{id}' , 'NoteController@consultant_notes')->name('note.consultant_notes'); 
Route::post('/note' , 'NoteController@store')->name('note.store'); 
Route::get('/consultant_offers/{id}' , 'OfferController@consultant_offers')->name('offer.consultant_offers'); 
Route::get('/offers_accepted/{id}' , 'OfferController@offer_accepted')->name('offer.accepted'); 

//offer.accepted