<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //

    public $fillable = ['keys_id' , 'value' , 'consultants_id'];

    public function key(){
        return $this->belongsTo('App\Key' , 'keys_id'); 

    }
    public function consultant(){
        return $this->belongsTo('App\Consultant' , 'consultants_id'); 
        
    }

}
