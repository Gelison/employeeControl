<?php

namespace Database\Factories;

use App\Models\Information;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\substitution>
 */
class SubstitutionFactory extends Factory
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
            'order_number' => $this->faker->randomNumber(1000, false),
            'substitutions_occasion' => $this->faker->word,
            'position_id'=> Position::get()->random_int()->id
        ];
    }
}
