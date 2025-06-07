<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    //change table name from categories to category
    
    protected $table = 'category';

    public function products()
    {
      // the products inside one category
      return $this->belongsToMany('App\Product');

    }
}
