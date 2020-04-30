<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function quotations()
    {
        return $this->hasMany('App\Quotations');
    }
}
