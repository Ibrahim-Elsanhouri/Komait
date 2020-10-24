<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    //
    public $guarded = []; 
    public function user(){
        return $this->belongsTo('App\User' , 'cms_users_id');
    }
    public function type(){
        return $this->belongsTo('App\Type' , 'types_id');
    }
    public function notes(){
        return $this->hasMany('App\Note' , 'consultants_id');
    }
    public function offers(){
        return $this->hasMany('App\Offer' , 'consultants_id');
    }
}
