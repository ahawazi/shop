<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;

class MenusTableSeederCustom extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'footer.right',
        ]);
        Menu::firstOrCreate([
            'name' => 'footer.middle',
        ]);
        Menu::firstOrCreate([
            'name' => 'footer.left',
        ]);
    }
}
