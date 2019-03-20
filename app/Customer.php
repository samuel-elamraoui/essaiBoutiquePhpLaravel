<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    public function order_head()
    {
        return $this->hasOne('App\Order_head');
    }
}
