<?php

use Illuminate\Database\Seeder;
use App\Feature;

class FeatureTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Feature::create([
          'name'=>'درگاه ارتباطی',
          'value'=>'usb 3',
          'product_id'=>1
        ]);
        Feature::create([
          'name'=>'کلاس وزنی',
          'value'=>'معمولی|200 تا 400 گرم',
          'product_id'=>1
        ]);
        Feature::create([
          'name'=>'تعداد درگاه خروجی',
          'value'=>'2 عدد',
          'product_id'=>1
        ]);
        Feature::create([
          'name'=>'قابلیت های ویژه',
          'value'=>'شارژ شدن سریع پاوربانک مدیریت هوشمند شارژ امکان شارژ کردن سریع‌تر موبایل امکان شارژ تبلت',
          'product_id'=>1
        ]);

    }
}
