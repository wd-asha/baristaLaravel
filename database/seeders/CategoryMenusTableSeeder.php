<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryMenusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_menus')->insert([
            'title' => 'Menu1'
        ]);

        DB::table('category_menus')->insert([
            'title' => 'Menu2'
        ]);
    }
}
