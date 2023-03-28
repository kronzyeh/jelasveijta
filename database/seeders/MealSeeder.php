<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Meal;
use Faker\Factory as Faker;

class MealSeeder extends Seeder
{
    public function run()
{
    $faker = Faker::create();

    // Get all existing ingredient ids
    $ingredientIds = \DB::table('ingredients')->pluck('id')->toArray();
    
    // Create 50 meals
    for ($i = 0; $i < 50; $i++) {
        Meal::create([
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'category_id' => $faker->numberBetween(1, 5),
            'ingredients_id' => $faker->randomElement($ingredientIds),
            'image_url' => $faker->imageUrl(),
            'price' => $faker->randomFloat(2, 5, 30),
        ]);
    }
}

}

