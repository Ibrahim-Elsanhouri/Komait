<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    //
    protected $table="cms_notifications"; 
    public function user(){
        return $this->belongsTo('App\User' , 'id_cms_users'); 
    }

}
