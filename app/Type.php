<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //
    public function keys(){
        return $this->hasMany('App\Key' , 'types_id');
    }
}
