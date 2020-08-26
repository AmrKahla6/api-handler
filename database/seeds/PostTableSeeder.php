<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 1; $i <= 15; $i++) {
            Post::create([
                'user_id' => User::inRandomOrder()->first()->id,

                'title' => $faker->sentence(4),

                'body' => $faker->paragraph(),
            ]);
        } // end of loop

    } // end of public

}// end of seeder
