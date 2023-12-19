<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title' => 'Coffee'
        ]);

        DB::table('categories')->insert([
            'title' => 'Coffee cup'
        ]);

        DB::table('categories')->insert([
            'title' => 'Coffee pot'
        ]);

        DB::table('categories')->insert([
            'title' => 'Coffee bags'
        ]);
    }
}
