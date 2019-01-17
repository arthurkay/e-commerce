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

            $title = $faker->word;

        Blog::create([
            'author' => $faker->name,
            'editor' => $faker->name,
            'body' => $faker->realText,
            'title' => $title,
            'images' => '/home/arthur/Documents/Dev/vicfirm/storage/app/images/vbFa2C4kmAVPc0w8ydVWSQIm2ZCxFSKZ1kYNxFre.jpeg',
            'views' => 0,
            'slug' => str_slug($title)
        ]);

        }
        
    }
}
