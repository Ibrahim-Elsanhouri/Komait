<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    //
    public $guarded = [];

      public function user(){
        return $this->belongsTo('App\User' , 'cms_users_id'); 
    }
    public function offer(){
        return $this->belongsTo('App\Offer' , 'offers_id'); 
    }
    public function consultant(){
        return $this->belongsTo('App\Consultant' , 'consultants_id'); 
    }
}
