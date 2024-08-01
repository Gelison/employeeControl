<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CreateSuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superUser = User::create([
            'email' => 'admin@admin.com',
            'name' => 'Admin',
            'password' => Hash::make(123456),
            'email_verified_at' => now(),

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
