<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    protected $fillable = ['name', 'description', 'code', 'active'];
    
    public function stocks()
    {
        return $this->hasMany('App\Stock');
    }
}
