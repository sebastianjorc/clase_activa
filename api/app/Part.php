<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = ['name', 'description', 'code', 'active'];

    public function provider()
    {
        return $this->belongsTo('App\Provider');
    }
    
    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
}
