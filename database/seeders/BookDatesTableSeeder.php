<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookDatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_dates')->insert([
            'date' => '2023.12.03'
        ]);

        DB::table('book_dates')->insert([
            'date' => '2023.12.04'
        ]);

        DB::table('book_dates')->insert([
            'date' => '2023.12.05'
        ]);

        DB::table('book_dates')->insert([
            'date' => '2023.12.06'
        ]);

        DB::table('book_dates')->insert([
            'date' => '2023.12.07'
        ]);
    }
}
