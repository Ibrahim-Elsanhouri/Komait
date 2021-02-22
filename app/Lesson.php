<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    //.

    public $guarded = [];

    public function course(){
        return $this->belongsTo('App\Course' , 'courses_id'); 
    }
}
