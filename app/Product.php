<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Product extends Model
{
    //
    use SearchableTrait;

    /**
    * Searchable rules.
    *
    * @var array
    */
   protected $searchable = [
       /**
        * Columns and their priority in search results.
        * Columns with higher values are more important.
        * Columns with equal values have equal importance.
        *
        * @var array
        */
       'columns' => [
           'products.name' => 3,
           'products.details' => 2,
           'products.description' => 1,
       ],
   ];


    public function presentPrice($price)
    {
      return number_format($price,2);
    }

    public function categories()
    {
      // the categoris of one product
      return $this->belongsToMany('App\Category');

    }

    // features
    public function features()
    {
      return $this->hasMany('App\Feature');
    }
}
