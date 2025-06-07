<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    public function findByCode($code)
    {
      return self::where('code',$code)->first();
    }

    public function discount($total)
    {
      if ($this->type=='fixed') {
        return $this->value;
      }elseif($this->type=='percent_off')
      {
        return (integer)$total*($this->percent_off)*10;
      }else {
        return 0;
      }
    }

}
