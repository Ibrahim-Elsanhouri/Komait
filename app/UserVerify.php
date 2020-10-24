<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVerify extends Model
{
    //
    public $table = "user_verified";
    public function user()
    {
        return $this->belongsTo('App\User' , 'cms_users_id');
    }
}
