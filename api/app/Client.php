<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function quotations()
    {
        return $this->hasMany('App\Quotation');
    }

    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }

    public function receipts()
    {
        return $this->hasMany('App\Receipt');
    }
}
