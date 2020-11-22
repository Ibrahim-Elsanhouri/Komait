<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category; 
use App\Instructor; 
use CRUDBooster; 
class InstructorController extends Controller
{
    //

    public function __construct()
    {
       $this->middleware('myauth');

      //    $this->middleware('log')->only('index');

     //   $this->middleware('myauth')->except('myauth');
    }
    public function index(){
        
        $instructors = Instructor::where('cms_users_id' , CRUDBooster::myId())->get(); 
        return view('instructors.index' , compact('instructors')); 

    }
    public function create(){
// check if user send request before 
if( Instructor::where('cms_users_id' , CRUDBooster::myId())->count() > 0){
    return redirect()->route('instructor.index')->with('danger' , 'لديك طلب مسبق   ☕ ');
}
        $categories = Category::all(); 
return view('instructors.create' , compact('categories')); 
    }

  
    public function store(Request $request){
Instructor::create($request->all()); 
return redirect()->route('instructor.index')->with('success' , 'تم ارسال الطلب سوف يتم مراجعته من قبل الادارة ⌨');
//r//eturn view('')
        
    }
}
