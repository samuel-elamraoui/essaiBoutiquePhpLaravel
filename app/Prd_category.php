<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prd_category extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'prd_categories'; //designe la table qu'il utilise

    public function productlist(){
      return $this->hasMany('App\Productlist', 'prd_category_id' , 'id');
    }

}}


