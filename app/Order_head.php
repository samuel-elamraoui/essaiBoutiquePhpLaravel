<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_head extends Model
{
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
