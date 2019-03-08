<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Productlist extends Model
{
    public $timestamps = false;
    protected $table='products';     //designe la table qu'il utilise
}
