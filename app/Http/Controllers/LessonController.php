<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lesson; 
class LessonController extends Controller
{
    //
    
    public function show($id){
      $lesson = Lesson::find($id); 

    //  $this->authorize('show', $lesson->id);
      
      return view('lessons.show' , compact('lesson')); 

    

    }

}
