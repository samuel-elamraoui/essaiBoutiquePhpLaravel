<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public $timestamps = false;

    public function order()
    {
        return $this->hasMany('App\Order');
    }

    public function adress()
    {
        return $this->hasMany('App\Adress');
    }
}
