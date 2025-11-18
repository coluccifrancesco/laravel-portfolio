<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{

    // Run the database seeds.
    public function run(Faker $faker): void {
        
        for ($i=0; $i < 6; $i++) { 
            
            $newProject = new Project();

            $newProject->name = $faker->word();
            $newProject->description = $faker->paragraph(5);
            $newProject->tech_stack = json_encode($faker->words(5));
            $newProject->img = $faker->word();
            $newProject->repo_link = $faker->url();
            $newProject->category_id = $faker->randomNumber(1, true);

            $newProject->save();
        }
    }
}
