<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Key extends Model
{
    //
    public function type(){
        return $this->belongsTo('App\Type' , 'types_id');
    }
}
