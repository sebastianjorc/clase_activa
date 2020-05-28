<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'user_id', 
        'vin', 
        'plate', 
        'maker', 
        'model', 
        'year', 
        'engine', 
        'color', 
        'transmission', 
        'fuel'
    ];

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
