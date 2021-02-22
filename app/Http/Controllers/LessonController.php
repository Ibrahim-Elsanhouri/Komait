<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson;
use CRUDBooster; 
use App\Policies\LessonPolicy; 

class LessonController extends Controller
{
    //
    public function __construct(){


    }
    
    public function show( $id ){
      $lesson = Lesson::find($id); 
    // dd($lesson->course->users->contains(CRUDBooster::myId()));


  //  dd(CRUDBooster::myId()); 
   if (!$lesson->course->users->contains(CRUDBooster::myId())) {
    dd ('منطقة خطيرة انت تحاول الوصول الى دورة لست مشترك بها');
   }
  
    
      // 
      return view('lessons.show' , compact('lesson'));

    

    }

}
