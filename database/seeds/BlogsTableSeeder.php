<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        Blog::truncate();

        for ( $i = 0 ; $i > 10; $i++ ) {

            $title = $faker->word." ".$faker->word;

        Blog::create([
            'author' => $faker->name,
            'editor' => $faker->name,
            'body' => $faker->realText,
            'title' => $title,
            'images' => $faker->image('images', 800, 740),
            'views' => 0,
            'slug' => str_slug($title, "-")
        ]);

        }
        
    }
}
