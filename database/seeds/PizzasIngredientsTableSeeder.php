<?php

use Illuminate\Database\Seeder;
use App\Pizza;
use App\Ingredient;
class PizzasIngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i < 10; $i++){
            $pizza= Pizza::inRandomOrder()->first();
            $ingredient_id= Ingredient::inRandomOrder()->first()->id;

            $pizza->ingredients()->attach($ingredient_id);
        }
    }
}
