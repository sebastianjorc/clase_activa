<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Es desde aquí
    //En from here
    protected $fillable = [
        'name', 'description','guard_name'
    ];

    public function users(){
        return $this->belongsToMany('App\User')->withTimesTamps();
    }

}
