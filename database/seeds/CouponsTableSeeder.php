<?php

use Illuminate\Database\Seeder;
use App\Coupon;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // create sample coupons in different type
      Coupon::create([
        'code'=>'xyz123',
        'type'=>'fixed',
        'value'=>9000,

      ]);
      Coupon::create([
        'code'=>'xyz456',
        'type'=>'percent_off',
        'percent_off'=>30,

      ]);
    }
}
