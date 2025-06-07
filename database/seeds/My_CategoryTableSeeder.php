<?php

use Illuminate\Database\Seeder;
use App\Category;

class My_CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
          'name'=>'کالای دیجیتال',
          'slug'=>'electronic-devices'
        ]);
        Category::create([
          'name'=>'آرایشی بهداشتی',
          'slug'=>'personal-appliance'
        ]);
        Category::create([
          'name'=>'خودرو ابزار اداری',
          'slug'=>'vehicles'
        ]);
        Category::create([
          'name'=>'مد و پوشاک',
          'slug'=>'apparel'
        ]);
        Category::create([
          'name'=>'خانه و آشپزخانه',
          'slug'=>'home-and-kitchen'
        ]);
        Category::create([
          'name'=>'فرهنگ و هنر',
          'slug'=>'book-and-media'
        ]);
        Category::create([
          'name'=>'اسباب بازی و کودک',
          'slug'=>'mother-and-child'
        ]);
        Category::create([
          'name'=>'ورزش و سفر',
          'slug'=>'sport-entertainment'
        ]);
        Category::create([
          'name'=>'خوردنی و آشامیدنی',
          'slug'=>'food-beverage'
        ]);
    }
}
