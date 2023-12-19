<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => 'Expand Your Mind, Change Everything',
            'author' => 'Federico Hickman',
            'tag' => 'Enjoyment',
            'created_at' => Now(),
            'desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat dictum lacus, ut hendrerit mi pulvinar vel. Fusce id nibh at neque eleifend tristique at sit amet libero. In aliquam in nisl nec sollicitudin. Sed consectetur volutpat sem vitae facilisis. Fusce tristique, magna ornare facilisis sagittis, tortor mi auctor libero, non pharetra sem ex eu felis. Aenean egestas ut purus nec vehicula. Morbi eu nisi erat. Nam mattis id lectus sit amet mattis. Suspendisse eget tristique neque</p>',
        ]);

        DB::table('posts')->insert([
            'title' => 'Places to get lost',
            'author' => 'Federico Hickman',
            'tag' => 'Enjoyment',
            'created_at' => Now(),
            'desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat dictum lacus, ut hendrerit mi pulvinar vel. Fusce id nibh at neque eleifend tristique at sit amet libero. In aliquam in nisl nec sollicitudin. Sed consectetur volutpat sem vitae facilisis. Fusce tristique, magna ornare facilisis sagittis, tortor mi auctor libero, non pharetra sem ex eu felis. Aenean egestas ut purus nec vehicula. Morbi eu nisi erat. Nam mattis id lectus sit amet mattis. Suspendisse eget tristique neque</p>',
        ]);

        DB::table('posts')->insert([
            'title' => 'Elevate Your Expectations',
            'author' => 'Federico Hickman',
            'tag' => 'Enjoyment',
            'created_at' => Now(),
            'desc' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean feugiat dictum lacus, ut hendrerit mi pulvinar vel. Fusce id nibh at neque eleifend tristique at sit amet libero. In aliquam in nisl nec sollicitudin. Sed consectetur volutpat sem vitae facilisis. Fusce tristique, magna ornare facilisis sagittis, tortor mi auctor libero, non pharetra sem ex eu felis. Aenean egestas ut purus nec vehicula. Morbi eu nisi erat. Nam mattis id lectus sit amet mattis. Suspendisse eget tristique neque</p>',
        ]);
    }
}
