<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $guarded = [];

    public function requests(){
        return $this->hasMany('app\Requests','clients_id');
    }
}
