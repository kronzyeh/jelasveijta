<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Language;

class LanguageSeeder extends Seeder
{
    public function run()
    {
        Language::create([
            'name' => 'English',
            'code' => 'en',
        ]);

        Language::create([
            'name' => 'Spanish',
            'code' => 'es',
        ]);

        Language::create([
            'name' => 'French',
            'code' => 'fr',
        ]);
    }
}

