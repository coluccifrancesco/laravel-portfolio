<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as faker;

class TagsTableSeeder extends Seeder {
    
    // Run the database seeds.
    public function run(Faker $faker): void {

        for ($i = 0; $i < 3; $i++) { 
            
            $newTag = new Tag();
    
            $newTag->name = $faker->word();
            $newTag->color = $faker->hexColor();
    
            $newTag->save();
        }
    }
}
