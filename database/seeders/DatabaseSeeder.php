<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswas;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PerusahaanSeeder::class,
        ]);

        Siswas::factory(10)->create();
    }
}