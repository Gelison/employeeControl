<?php

namespace Database\Seeders;

use App\Models\Doctype;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctype::factory()->count(10)->create();
    }
}
