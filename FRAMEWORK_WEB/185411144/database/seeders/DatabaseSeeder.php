<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\createJurusanSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            createMahasiswaSeeder::class,
            createJurusanSeeder::class
        ]);
    }
}
