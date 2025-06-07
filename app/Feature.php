<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //relation for product

    public function products()
    {
      return $this->belongsTo('App\Product');
    }
}
