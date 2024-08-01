<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;


use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            CreateRoleSeeder::class,
            CreateUserRoleSeeder::class,

            CreateSuperUserSeeder::class,

            UserSeeder::class,


            CreateRoleInfoSeeder::class,
            DoctypeSeeder::class,
            LevelSeeder::class,

            DivisionSeeder::class,
            PositionSeeder::class,
            CreateInformationAdminSeeder::class,

            InformationSeeder::class,



            SubstitutionSeeder::class,
            TransferSeeder::class,
            CertificationSeeder::class,
            EducationSeeder::class,

        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
