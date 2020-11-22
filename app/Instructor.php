<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    //
    public $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User' , 'cms_users_id');
    }

}
