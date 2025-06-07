<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Laptop Category
        Product::create([
          'name'=>'MacBook Pro MD 101',
          'slug'=>'mackbook-pro-md-101',
          'details'=>'15inch Monitor , 1TB SSD , 32GB RAM',
          'price'=>24999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Asus N550JV',
          'slug'=>'asus-N-series',
          'details'=>'15inch Monitor , 2TB HDD , 16GB RAM',
          'price'=>54555,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'MacBook Air',
          'slug'=>'mackbook-air',
          'details'=>'15inch Monitor , 512GB HDD , 8GB RAM',
          'price'=>1235,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Acer V15 Nitro',
          'slug'=>'acer-v-15-nitro',
          'details'=>'17inch Monitor ,256GB SSD + 1GB HDD ,16GB RAM',
          'price'=>12500,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'ASUS ZenBook UX305',
          'slug'=>'asus-zenbook',
          'details'=>'15inch Monitor , 1TB SSD , 32GB RAM',
          'price'=>12547,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Toshiba Chromebook 2',
          'slug'=>'toshiba-chromebook',
          'details'=>'15inch Monitor , 2TB SSD , 12GB RAM',
          'price'=>24999,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'HP Spectre x2 12-a000 ',
          'slug'=>'hp-spectre-x2',
          'details'=>'15inch Monitor , 1TB HDD , 8GB RAM',
          'price'=>12545,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Surface Pro 4 ',
          'slug'=>'surface-pro',
          'details'=>'13inch Monitor , 1TB HDD , 32GB RAM',
          'price'=>12545,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'Acer Aspire E 15',
          'slug'=>'acer-aspire-e',
          'details'=>'15inch Monitor , 12GB SSD + 1TB HDD , 32GB RAM',
          'price'=>85452,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        Product::create([
          'name'=>'MacBook Pro MD 102',
          'slug'=>'mackbook-pro',
          'details'=>'15inch Monitor , 512GB SSD , 8GB RAM',
          'price'=>54457,
          'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(1);

        // presonal appliance
        Product::create([
          'name'=>'Bell Full Lash Mascara',
          'slug'=>'Bell-full-lash-mascara',
          'details'=>'ضد آب: خیر',
          'price'=>10000,
          'description' => ' Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'
        ])->categories()->attach(2);


    }
}
