<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    //
    public $guarded = []; 

public function course(){
    return $this->belongsTo('App\Course' , 'courses_id');
}
public function user(){
    return $this->belongsTo('App\Course' , 'users_id');
}
    

}
