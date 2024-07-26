<?php

namespace Database\Seeders;

use App\Models\Substitution;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubstitutionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Substitution::factory()->count(10)->create();
    }
}
