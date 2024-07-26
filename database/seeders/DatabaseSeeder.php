<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Certification;
use App\Models\Doctype;
use App\Models\Education;
use App\Models\Information;
use App\Models\Substitution;
use App\Models\Transfer;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            DivisionSeeder::class,
            Doctype::class,
            LevelSeeder::class,
            PositionSeeder::class,
            Certification::class,
            Education::class,
            Substitution::class,
            Transfer::class,
            Information::class,
            User::class,
            ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
