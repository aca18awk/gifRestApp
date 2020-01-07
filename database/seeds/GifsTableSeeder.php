<?php

use App\Gif;
use Illuminate\Database\Seeder;

class GifsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Gif::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Gif::create([
                // 'title' => $faker->sentence,
                'title' => $faker->country,
                'url' => $faker->url,
            ]);
        }
    }
}
