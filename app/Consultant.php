<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Consultant extends Model
{
    //
    public $fillable = ['subject', 'details' , 'file' , 'cms_users_id' , 'types_id' , 'licences' , 'study' , 
'docs']; 
    public function user(){
        return $this->belongsTo('App\User' , 'cms_users_id');
    }
    public function type(){
        return $this->belongsTo('App\Type' , 'types_id');
    }
    public function hala(){
        return $this->belongsTo('App\Hala' , 'halas_id');
    }

    public function notes(){
        return $this->hasMany('App\Note' , 'consultants_id');
    }
    public function offers(){
        return $this->hasMany('App\Offer' , 'consultants_id');
    }
    public function contract(){
        return $this->hasOne('App\Contract' , 'consultants_id'); 
    }
    public function entries(){
        return $this->hasMany('App\Entry' , 'consultants_id'); 
    }
}
