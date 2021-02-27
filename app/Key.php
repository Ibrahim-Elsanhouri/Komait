<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    //


    public $guarded = [];

    public function type(){
        return $this->belongsTo('App\Type' , 'types_id');
    }
    public function entry(){
        return $this->belongsTo('App\Entry' , 'keys_id');
    }
}
