<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enrollment; 
use CRUDBooster;
class EnrollmentController extends Controller
{
    //
    public function store(Request $request){
        Enrollment::create($request->all()); 
        return back()->with('primary' , 'اختيار رائع , تم انضمامك للدورة'); 
    }
   
}
