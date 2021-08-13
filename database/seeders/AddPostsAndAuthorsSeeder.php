<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AddPostsAndAuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++)
        {
            Author::query()->create([
                'name' => 'author_'.$i,
                'uuid' => Str::uuid()
            ]);
        }

        $authors = Author::query()->get();
        foreach ($authors as $author)
        {
            for($i = 0; $i < 10; $i++)
            {
                $post = Post::query()->create([
                    'title' => 'title_'.rand(1111,55566667788),
                    'description' => Str::random(300),
                    'author_id' => $author->id,
                    'slug' => 'title_'.$i.'_'.Str::uuid()
                ]);

                for($d = 0; $d < 10; $d++)
                {
                    Comment::query()->create([
                       'comment' => Str::random(100),
                       'post_id' => $post->id
                    ]);
                }
            }
        }
    }
}
