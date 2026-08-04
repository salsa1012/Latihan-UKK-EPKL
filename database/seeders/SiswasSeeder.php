<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswas;

class SiswasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Siswas::factory()->count(20)->create();
    }
}