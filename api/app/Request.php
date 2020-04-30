<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
}
