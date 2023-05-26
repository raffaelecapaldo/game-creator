<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Character;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {
            $newCharacter = new Character();

            $newCharacter->name = $faker->name;
            $newCharacter->description = $faker->sentence;
            $newCharacter->attack = $faker->numberBetween(1, 100);
            $newCharacter->defence = $faker->numberBetween(1, 100);
            $newCharacter->speed = $faker->numberBetween(1, 100);
            $newCharacter->life = $faker->numberBetween(1, 100);

            $newCharacter->save();
        }
        //
    }
}
