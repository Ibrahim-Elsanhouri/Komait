<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //
    public $guarded = [];
public function contract(){
    return $this->belongsTo('App\Contract' , 'contracts_id'); 
}
}
