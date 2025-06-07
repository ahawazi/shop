<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(My_CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(FeatureTableSeeder::class);
        $this->call(CouponsTableSeeder::class);

    }
}
