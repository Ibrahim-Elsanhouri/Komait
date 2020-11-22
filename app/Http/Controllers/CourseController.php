<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course; 
use CRUDBooster; 
class CourseController extends Controller
{
    //
    public function __construct()
    {
      // $this->middleware('myauth');

          $this->middleware('myauth')->only('enrollment');

     //   $this->middleware('myauth')->except('myauth');
    }
    public function index(){
        
      $courses = Course::published()->get(); 
      return view('courses.index' , compact('courses')); 

  }
  
    public function show($id){
      $course = Course::find($id);
// dd($course->lessons()); 
      return view('courses.show' , compact('course'));

    }
    public function enrollment($id){
      $course = Course::find($id);
      $course->users()->attach(CRUDBooster::myId()); 
      return back()->with('danger' , 'يسعدنا انضمامك للدورة اختيار موفق 💖'); 
      

    }
}
