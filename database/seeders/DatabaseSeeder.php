<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $this->call([
            /*UsersTableSeeder::class,*/
            /*RolesTableSeeder::class,*/
            /*CategoryMenusTableSeeder::class,*/
            /*MenuItemsTableSeeder::class,*/
            /*BookDatesTableSeeder::class,*/
            /*BookTimesTableSeeder::class,*/
            /*PostsTableSeeder::class,*/
            /*CategoryTableSeeder::class,*/
            ProductsTableSeeder::class
        ]);

    }
}
