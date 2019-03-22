<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productlist extends Model
{
    public $timestamps = false;
    protected $table='products';

    //designe la table qu'il utilise
    public function discount(){
        return $this->hasOne('App\discount');
    }


   public function category(){
        return $this->belongsTo('App\Prd_category', 'prd_category_id' , 'id');
    }


}
