<?php

namespace Database\Seeders;

use App\Models\RoleInfo;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateRoleInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roleInfo = RoleInfo::create([
            'user_id' => '1',
            'role_id' => '1',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
