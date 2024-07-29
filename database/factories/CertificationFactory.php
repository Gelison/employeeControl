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
            'information_id' => Information::get()->random()->id,

            'date' => $this->faker->dateTimeAD,
            'record_number' => $this->faker->randomDigit,
            'division_id' => $this->faker->numberBetween(1, 10),
            'position_id' => $this->faker->numberBetween(1, 10),
            'recomendetion' => fake()->word()

        ];
    }
}
