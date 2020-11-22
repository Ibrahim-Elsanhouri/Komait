<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hala extends Model
{
    //
    public $guarded = [];

    public $table ="halas";
    public function consultants(){
        return $this->hasMany('App\Consultant' , 'consultants_id'); 
    } 
}
