<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    public function roles(){
        return $this->belongsToMany('App\Role')->withTimesTamps();
    }
}
