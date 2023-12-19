<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_times')->insert([
            'title' => '08:00'
        ]);

        DB::table('book_times')->insert([
            'title' => '09:00'
        ]);

        DB::table('book_times')->insert([
            'title' => '10:00'
        ]);

        DB::table('book_times')->insert([
            'title' => '11:00'
        ]);

        DB::table('book_times')->insert([
            'title' => '12:00'
        ]);
    }
}
