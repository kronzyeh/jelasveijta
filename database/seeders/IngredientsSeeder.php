<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        
        // Generate five categories
        for ($i = 0; $i < 10; $i++) {
            DB::table('ingredients')->insert([
                'id' => $i+1,
                'created_at' => now(),
                'updated_at' => now(),
                'name' => $faker->word(),
            ]);
        }
    }
}
