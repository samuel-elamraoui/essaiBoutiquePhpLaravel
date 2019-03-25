<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
public $timestamps= false;
public function category(){
    return $this->belongsTo('App/category','prd_category_id', 'id');
}
}
