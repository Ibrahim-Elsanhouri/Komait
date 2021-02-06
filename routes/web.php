<?php
use RealRashid\SweetAlert\Facades\Alert;
use App\Payment\LmsPaymentService;
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

Route::get('/profile' , 'UserController@profile')->name('user.profile'); 
Route::get('/profile/edit' , 'UserController@edit')->name('user.edit'); 

Route::get('/notifications' , 'NotificationController@index'); 

Route::get('/verifyEmail/{token}' , 'UserController@verifyEmail')->name('user.verify'); 

Route::get('/consultant' , 'ConsultantController@create')->name('consultant.create'); 
Route::get('/consultant/{id}' , 'ConsultantController@show')->name('consultant.show'); 

Route::post('/consultant' , 'ConsultantController@store')->name('consultant.store'); 
Route::get('/myconsultants' , 'ConsultantController@myconsultants')->name('consultant.myconsultants'); 
//consultant_notes
Route::get('/consultant_notes/{id}' , 'NoteController@consultant_notes')->name('note.consultant_notes'); 
Route::post('/note' , 'NoteController@store')->name('note.store'); 
Route::get('/consultant_offers/{id}' , 'OfferController@consultant_offers')->name('offer.consultant_offers'); 
Route::get('/offers_accepted/{id}' , 'OfferController@offer_accepted')->name('offer.accepted'); 

//offer.accepted



/// Contract 
Route::post('/contract' , 'ContractController@store')->name('contract.store'); 
Route::get('/contract/{id}' , 'ContractController@show')->name('contract.show'); 
// confirmed
Route::get('/contract/confirmed/{id}' , 'ContractController@confirmed')->name('contract.confirmed'); 

//paylink 

Route::post('/check/{id}' , 'PaylinkController@post_login')->name('paylink.token'); 
Route::post('/check-course/{id}' , 'PaylinkController@post_login')->name('paylink.course.token'); 
Route::post('/pay' , 'PaylinkController@create_invoice')->name('paylink.invoice'); 
Route::post('/pay-course' , 'PaylinkController@create_course_invoice')->name('paylink.course.invoice'); 


// Courses 
Route::get('/courses' , 'CourseController@index')->name('course.index'); 
Route::get('/courses/{id}' , 'CourseController@show')->name('course.show');
Route::get('/enrollment/{id}' , 'CourseController@enrollment')->name('course.enrollment');

// lessons
Route::get('/lessons/{id}' , 'LessonController@show')->name('lesson.show'); 
//Route::get('/lesson_complete' , 'LessonController@lesson_complete')->name('lesson.complete'); 
//enrollment

// Become Instructor 
Route::get('/instructor' , 'InstructorController@index')->name('instructor.index'); 
Route::get('/become-instructor' , 'InstructorController@create')->name('instructor.create'); 
Route::post('/become-instructor' , 'InstructorController@store')->name('instructor.store'); 


// Enrollment
Route::get('/myenrollments ','UserController@myenrollments');


Route::post('/enrollment' , 'EnrollmentController@store')->name('enrollment.store'); 


Route::post('/initial_payment/{id}' , 'MyfatoorahController@initial_payment')->name('myfatoorah.initial');
Route::post('/execute_payment/{id}' , 'MyfatoorahController@execute_payment')->name('myfatoorah.execute');
Route::post('/DirectPayment' , 'MyfatoorahController@direct_payment')->name('myfatoorah.direct');

Route::get('/invoices_report/{id}' , 'InvoiceController@createInvoicePDF')->name('invoice.pdf');
/*

Route::get('payment/{service}' , function($service){
 //dd($service); 
 $service = sprintf("App\\Payment\\".$service); 
 //dd($service);
$class = new $service;
//$class  =  sprintf(); 
$class->initial_payment(1);

});

*/