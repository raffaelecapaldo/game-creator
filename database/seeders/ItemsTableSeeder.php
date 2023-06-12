<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = getCsvData('resources\csv\weapons.csv');
        foreach ($items as $index => $row) {
            if ($index !== 0) {
                $newItem = new Item();
                $newItem->name = $row[0];
                $newItem->slug = Str::slug($row[0], '-');
                $newItem->type = $row[2];
                $newItem->category = $row[3];
                $newItem->weight = $row[4];
                $newItem->cost = $row[5];
                $newItem->damage_dice = $row[6];
                $newItem->save();
            }
        }
        //
    }
}
