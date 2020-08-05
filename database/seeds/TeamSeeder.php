<?php

use App\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'name' => "Astana Pro Team",
            'abbrevation' => "AST",
            'country' => "Kazajstan",
            'class_id' => 1
        ]);
        Team::create([
            'name' => "Bahrain - McLaren",
            'abbrevation' => "TBM",
            'country' => "Bahrain",
            'class_id' => 1,
        ]);
        Team::create([
            'name' => "BORA - Hansgrohe",
            'abbrevation' => "BOH",
            'country' => "Germany",
            'class_id' => 1
        ]);
        
        // $faker = \Faker\Factory::create();
        // for($i=0;$i<5;$i++){
        //     Team::create([
        //         'name' => "Team ".$faker->company(),
        //         'abbrevation' => $faker->word(),
        //         'country' => $faker->country(),
        //         'url' => $faker->url(),
        //         'class_id' => 1
        //     ]);
        // }
        // for($i=0;$i<5;$i++){
        //     Team::create([
        //         'name' => "Team ".$faker->company(),
        //         'abbrevation' => $faker->word(),
        //         'country' => $faker->country(),
        //         'url' => $faker->url(),
        //         'class_id' => 2
        //     ]);
        // }
        // for($i=0;$i<5;$i++){
        //     Team::create([
        //         'name' => "Team ".$faker->company(),
        //         'abbrevation' => $faker->word(),
        //         'country' => $faker->country(),
        //         'url' => $faker->url(),
        //         'class_id' => 3
        //     ]);
        // }
    }
}
