<?php

use Illuminate\Database\Seeder;
use App\AnimePost;

class AnimePostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Some fake data as example
        $AniPost = new AnimePost;

        $AniPost -> name = "Naruto";
        $AniPost -> genre = "Shounen";
        $AniPost -> episodes = "250";
        $AniPost -> released = 2002;
        $AniPost -> status = 'completed';
        $AniPost -> user_id = rand(1,7);
        $AniPost -> save();

        //Use factory to generate 30 examples
        factory(App\AnimePost::class, 30) -> create();
    }
}
