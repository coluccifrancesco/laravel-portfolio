<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CategoriesTableSeeder extends Seeder {
    
    // Run the database seeds
    public function run(Faker $faker): void {
        
        for ($i = 0; $i < 3; $i++) { 
    
            $newCategory = new Category();

            $newCategory->name = $faker->word();
            $newCategory->description = $faker->paragraph(3);

            $newCategory->save();
        }
    }
}
