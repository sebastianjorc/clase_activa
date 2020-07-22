<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;
use LaravelAndVueJS\Traits\LaravelPermissionToVueJS;


class User extends Authenticatable
{
    use Notifiable, HasRoles, HasApiTokens;
    use LaravelPermissionToVueJS;

    protected $fillable = ['name', 'username', 'email', 'password',];
    protected $hidden   = ['password', 'remember_token',];

    public function roles(){
        return $this->belongsToMany('App\Role')->withTimesTamps();
    }

    public function parts()
    {
        return $this->hasMany('App\Part');
    }

}
