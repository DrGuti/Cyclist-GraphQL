<?php

use App\Cyclist;
use Illuminate\Database\Seeder;

class CyclistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cyclist::create([
            'first_name' => "Mikel",
            'last_name' => "Landa",
            'country' => "Spain",
            'city' => "Mugia",
            'birth_day' => "1989-12-13",
            'team_id' => 2
        ]);
        Cyclist::create([
            'first_name' => "Peter",
            'last_name' => "Sagan",
            'country' => "Slovakia",
            'birth_day' => "1990-01-26",
            'team_id' => 3
        ]);
        Cyclist::create([
            'first_name' => "Luis Leon",
            'last_name' => "Sanchez",
            'country' => "Spain",
            'birth_day' => "1983-11-24",
            'team_id' => 1
        ]);
        
        // $faker = \Faker\Factory::create();
        // \App\Team::all()->each(function ($team) use ($faker) {
        //     foreach (range(1, 8) as $i) {
        //         Cyclist::create([
        //             'first_name' => $faker->firstName(),
        //             'last_name' => $faker->lastName(),
        //             'country' => $faker->country(),
        //             'city' => $faker->city(),
        //             'birth_day' => $faker->date($format = 'Y-m-d', $max = '-16 years'),
        //             'team_id' => $team->id,
        //         ]);
        //     }
        // });
    }
}
