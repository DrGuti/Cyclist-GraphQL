<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    protected $tables = [
        'users',
        'team_classes',
        'teams',
        'bikes',
        'cyclists'
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTables($this->tables);
        $this->call(TeamClassSeeder::class);
        $this->call(TeamSeeder::class);
        $this->call(BikeSeeder::class);
        $this->call(CyclistSeeder::class);
    }

    protected function truncateTables(array $tables)
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tables as $table) {
            DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
