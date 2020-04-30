<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    public function defects()
    {
        return $this->hasMany('App\Defect');
    }

    public function work()
    {
        return $this->hasMany('App\Work');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
