<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 10; $i++) {
            $newProject = new Project();
            $newProject->title = $faker->sentence(2);
            $newProject->description = $faker->paragraphs(3, true);
            $newProject->img_preview = "https://picsum.photos/id/" . $faker->numberBetween(1, 700) . "/540/960";

            $newProject->type_id = $faker->numberBetween(1, 4);

            $newProject->save();

            //Ad ogni giro il progetto avrà un id e dopo che si salva tramite il metodo languages() attacca con attach() i numei random che creo nella variabile language
            $language = [rand(1, 2), rand(3, 4)];
            $newProject->languages()->attach($language);
        }
    }
}
