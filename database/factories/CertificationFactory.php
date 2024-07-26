<?php

namespace Database\Factories;

use App\Models\Division;
use App\Models\Information;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Certification>
 */
class CertificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'information_id' => Information::get()->random_int()->id,

            'date' => $this->faker->dateTimeAD,
            'record_number'=> $this->faker->randomDigit,
            'division_id'=> Division::get()->random_int()->id,
            'position_id' => Position::get()->random_int()->id,
            'recomendetion'=> fake()->word()
            
        ];
    }
}
