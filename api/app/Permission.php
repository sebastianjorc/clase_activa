<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = ['name', 'description','guard_name', 'slug', ];

    public function roles(){
        return $this->belongsToMany('App\Role')->withTimesTamps();
    }
}
