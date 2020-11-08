<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->user_id = 2;
        $post->title = 'Laravel vue blog title 1';
        $post->body = 'laravel vuejs blog body 1.';
        $post->save();

        $post = new Post();
        $post->user_id = 2;
        $post->title = 'Laravel Post Title 2';
        $post->body = 'laravel vuejs blog body 2.';
        $post->save();

    }
}
