<?php

use Illuminate\Database\Seeder;
use App\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Generate a random 70 comments
        factory(App\Comment::class, 70) -> create();
    }
}
