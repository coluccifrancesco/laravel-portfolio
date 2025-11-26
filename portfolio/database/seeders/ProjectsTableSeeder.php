<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder {

    // Run the database seeds.
    public function run(Faker $faker): void {
        
        for ($i=0; $i < 3; $i++) { 
            
            $newProject = new Project();

            $newProject->name = $faker->word();
            $newProject->description = $faker->paragraph(5);
            $newProject->img = $faker->word();
            $newProject->repo_link = $faker->url();
            $newProject->category_id = $faker->numberBetween(1, 3);

            $newProject->save();
        }
    }
}
