<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_items')->insert([
            'title' => 'CAFFE LATTE',
            'about' => 'Fresh brewed coffee and steamed milk',
            'price' => 2.95,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'CAFFE MOCHA',
            'about' => 'Espresso With Milk, and Whipped Cream',
            'price' => 3.67,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'WHITE CHOKOLATE MOCHA',
            'about' => 'Espresso, White Chocolate, Milk, Ice and Cream',
            'price' => 2.79,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'CAFFE AMERICANO',
            'about' => 'Espresso Shots and Light Layer of Crema',
            'price' => 3.06,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'CAPPUCCINO',
            'about' => 'Espresso, and Smoothed Layer of Foam',
            'price' => 4.03,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'VANILLA LATTE',
            'about' => 'Espresso Milk With Flavor,and Cream',
            'price' => 3.65,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Gingerbread Latte',
            'about' => 'Espresso, Milk, Ice, and Gingerbread Flavor',
            'price' => 3.92,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Caffe Mocha',
            'about' => 'Espresso, bittersweet mocha sauce, milk and ice',
            'price' => 2.60,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Smoked Latte',
            'about' => 'Espresso, ice, with smoked butterscotch',
            'price' => 3.05,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Caramel Macchiato',
            'about' => 'Espresso, vanilla-flavored syrup and milk',
            'price' => 2.54,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Espresso Macchiato',
            'about' => 'Rich Espresso With Milk and Foam',
            'price' => 2.98,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Caramel Latte',
            'about' => 'Espresso, Milk, Ice and Caramel Sauce',
            'price' => 4.67,
            'category_menu_id' => 1,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Caramel Latte',
            'about' => 'Espresso, Milk, Ice and Caramel Sauce',
            'price' => 4.67,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Espresso Macchiato',
            'about' => 'Rich Espresso With Milk and Foam',
            'price' => 2.98,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Caramel Macchiato',
            'about' => 'Espresso, vanilla-flavored syrup and milk',
            'price' => 2.54,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Smoked Latte',
            'about' => 'Espresso, ice, with smoked butterscotch',
            'price' => 3.05,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Caffe Mocha',
            'about' => 'Espresso, bittersweet mocha sauce, milk and ice',
            'price' => 2.60,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'Iced Gingerbread Latte',
            'about' => 'Espresso, Milk, Ice, and Gingerbread Flavor',
            'price' => 3.92,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'VANILLA LATTE',
            'about' => 'Espresso Milk With Flavor,and Cream',
            'price' => 3.65,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'CAPPUCCINO',
            'about' => 'Espresso, and Smoothed Layer of Foam',
            'price' => 4.03,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'CAFFE AMERICANO',
            'about' => 'Espresso Shots and Light Layer of Crema',
            'price' => 3.06,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'WHITE CHOKOLATE MOCHA',
            'about' => 'Espresso, White Chocolate, Milk, Ice and Cream',
            'price' => 2.79,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'CAFFE MOCHA',
            'about' => 'Espresso With Milk, and Whipped Cream',
            'price' => 3.67,
            'category_menu_id' => 2,
        ]);

        DB::table('menu_items')->insert([
            'title' => 'CAFFE LATTE',
            'about' => 'Fresh brewed coffee and steamed milk',
            'price' => 2.95,
            'category_menu_id' => 2,
        ]);

    }
}
