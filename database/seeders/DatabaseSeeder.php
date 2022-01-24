<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(15)->create();
        \App\Models\Station::factory(15)->create();
        \App\Models\Measurement::factory(30)->create();
        \App\Models\Key::factory(8)->create();
        \App\Models\Effective::factory(30)->create();
    }
}
