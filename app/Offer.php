<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    //.

    public $guarded = [];
     
 
    public function consultant(){
        return $this->belongsTo('App\Consultant' , 'consultants_id'); 
    }



}
