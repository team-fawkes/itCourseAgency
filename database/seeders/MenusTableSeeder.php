<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;

class MenusTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        Menu::firstOrCreate([
            'name' => 'admin',
        ]);
        Menu::firstOrCreate([
            'name' => 'Header',
        ]);
        Menu::firstOrCreate([
            'name' => 'Quick Links',
        ]);
        Menu::firstOrCreate([
            'name' => 'Popular Courses',
        ]);
        Menu::firstOrCreate([
            'name' => 'Others',
        ]);
    }
}
