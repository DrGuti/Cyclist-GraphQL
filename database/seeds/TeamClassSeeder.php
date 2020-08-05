<?php

use App\TeamClass;
use Illuminate\Database\Seeder;

class TeamClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeamClass::create([
            'name' => "World Tour",
            'abbrevation' => "WT",
            'level' => 1
        ]);
        TeamClass::create([
            'name' => "Pro Tour",
            'abbrevation' => "PRT",
            'level' => 2
        ]);
        TeamClass::create([
            'name' => "Continental Tour",
            'abbrevation' => "CT",
            'level' => 3
        ]);
    }
}
