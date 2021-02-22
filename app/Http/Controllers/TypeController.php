<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Type; 
use App\Key; 

class TypeController extends Controller
{
    //
    public function index(){
        $types = Type::all(); 
        return response()->json($types);

    }
    public function get_type_keys(Request $request){

        $keys = Key::where('types_id', $request->types_id)->get();

        return response()->json($keys);

    }
    
}
