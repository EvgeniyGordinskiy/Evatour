<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
    protected $guarded = [];

    public function clients(){
        return $this->belongsTo('App\Clients');
    }
}
