<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function part()
    {
        return $this->belongsTo('App\Part');
    }
}
