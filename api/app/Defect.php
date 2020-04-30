<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Defect extends Model
{
    public function vehicle()
    {
        return $this->belongsTo('App\Vehicle');
    }
}
