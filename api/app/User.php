<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Laravel\Passport\HasApiTokens;


class User extends Authenticatable
{
    use Notifiable, HasRoles, HasApiTokens;

    protected $fillable = [
        'name', 'username', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function vehicles()
    {
        return $this->hasMany('App\Vehicle');
    }

    public function clients()
    {
        return $this->hasMany('App\Client');
    }

    public function customers()
    {
        return $this->hasMany('App\Customer');
    }

    public function providers()
    {
        return $this->hasMany('App\Provider');
    }

    public function quotations()
    {
        return $this->hasMany('App\Quotation');
    }

    public function work()
    {
        return $this->hasMany('App\Work');
    }

}
