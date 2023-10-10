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
            'header' => 'Header',
        ]);
        Menu::firstOrCreate([
            'quick_links' => 'Quick Links',
        ]);
        Menu::firstOrCreate([
            'popular_courses' => 'Popular Courses',
        ]);
        Menu::firstOrCreate([
            'others' => 'Others',
        ]);
    }
}
