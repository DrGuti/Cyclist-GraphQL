<?php

use App\Bike;
use Illuminate\Database\Seeder;

class BikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bike::create(['name' => "Merckx"]);
        Bike::create(['name' => "Merida"]);
        Bike::create(['name' => "Specialized"]);
        
        // $faker = \Faker\Factory::create();
        // for($i=0;$i<5;$i++){
        //     Bike::create([
        //         'name' => $faker->company()
        //     ]);
        // }
    }
}
