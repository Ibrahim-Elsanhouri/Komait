<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Contract; 
class Offer extends Model
{
    //.

    public $guarded = [];
     
 public function scopeApproved($query){
     return $query->where('approved' , 1); 
 }

    public function consultant(){
        return $this->belongsTo('App\Consultant' , 'consultants_id'); 
    }
    public function contract(){
        return $this->hasOne('App\Contract' , 'offers_id'); 
    }
    public function has_contract(){
        return Contract::where('offers_id' , $this->id)->get(); 

    }
    public function has_draft_contract(){
return Contract::where('offers_id' , $this->id)->where('confirmed' , 0)->get(); 
    }
    public function has_confirmed_contract(){
        return Contract::where('offers_id' , $this->id)->where('confirmed' , 1)->get(); 

    }



}
