<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Call the Admin Theme seeder.
        $this->call(AdminThemeSeeder::class);
    }
}