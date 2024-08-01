<?php

namespace Database\Seeders;

use App\Models\Information;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateInformationAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $InfoAdmin = Information::create([
            'user_id' => '1',

            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),

        ]);
    }
}
