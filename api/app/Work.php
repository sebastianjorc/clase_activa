<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }

    public function mechanic()
    {
        return $this->belongsTo('App\User');
    }
}
