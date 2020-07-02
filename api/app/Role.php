<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    protected $fillable = [
        'name', 'description','guard_name', 'slug',
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }
    public function permissions(){
        return $this->belongsToMany('App\Permission')->withTimesTamps();
    }

}
