<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Pizza;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PizzaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tomato = Ingredient::create(['name' => 'tomato', 'cost_price' => 0.5]);
        $slicedMushrooms = Ingredient::create(['name' => 'sliced mushrooms', 'cost_price' => 0.5]);
        $fetaCheese = Ingredient::create(['name' => 'feta cheese', 'cost_price' => 1.0]);
        $sausages = Ingredient::create(['name' => 'sausages', 'cost_price' => 1.0]);
        $slicedOnion = Ingredient::create(['name' => 'sliced onion', 'cost_price' => 0.5]);
        $mozzarellaCheese = Ingredient::create(['name' => 'mozzarella cheese', 'cost_price' => 0.5]);
        $oregano = Ingredient::create(['name' => 'oregano', 'cost_price' => 1.0]);
        $bacon = Ingredient::create(['name' => 'bacon', 'cost_price' => 1.0]);

        $funPizza = Pizza::create(['name' => 'Fun Pizza']);
        $funPizza->ingredients()->attach([$tomato->id, $slicedMushrooms->id, $fetaCheese->id, $sausages->id, $slicedOnion->id, $mozzarellaCheese->id, $oregano->id]);

        $superMushroomPizza = Pizza::create(['name' => 'Super Mushroom Pizza']);
        $superMushroomPizza->ingredients()->attach([$tomato->id, $bacon->id, $mozzarellaCheese->id, $slicedMushrooms->id, $oregano->id]);
    }
}
