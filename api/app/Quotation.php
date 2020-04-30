<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function client()
    {
        return $this->belongsTo('App\Client');
    }

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }

    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }

    public function parts()
    {
        return $this->hasMany('App\Part');
    }
}
