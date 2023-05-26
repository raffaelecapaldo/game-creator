<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Character;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $newItem = new Item();

            $newItem->name = $faker->word;
            $newItem->description = $faker->sentence;
            $newItem->slug = $faker->slug;
            $newItem->category = $faker->word;
            $newItem->type = $faker->word;
            $newItem->weight = $faker->randomFloat(2, 0, 100);
            $newItem->cost = $faker->randomNumber(4);

            $newItem->save();
        }
        //
    }
}
