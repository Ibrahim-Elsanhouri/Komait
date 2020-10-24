<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note; 
class NoteController extends Controller
{
    //
    public function consultant_notes($id){
        $notes = Note::where('consultants_id' , $id)->get();
        $consultants_id = $id; 
        return view('notes.index' , compact('notes' , 'consultants_id')); 

    }
    public function store(Request $request){
      //  dd($request->all()); 
        Note::create($request->all()); 
        return back()->with('warning' , 'تم اضافة الملاحظة الى سجل المحادثات ✅');



    }
}
