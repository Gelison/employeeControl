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
            'information_id' =>$this->faker->numberBetween(1,10),
            'date' => $this->faker->dateTimeAD,
            'order_number' =>$this->faker->numberBetween(1000,2000),
            'substitutions_occasion' => $this->faker->word,
            'position_id'=>$this->faker->numberBetween(1,10),
        ];
    }
}
