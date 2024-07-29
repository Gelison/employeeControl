<?php

namespace Database\Factories;

use App\Models\Division;
use App\Models\Information;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transfer>
 */
class TransferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'information_id' => $this->faker->numberBetween(1, 10),
            'date' => $this->faker->dateTimeAD,
            'transfers_occasion'=> $this->faker->word,
            'division_id' => $this->faker->numberBetween(1, 10),
            'etc_persent' => $this->faker->numberBetween(1, 20),
            'contract_persent' => $this->faker->numberBetween(1, 50),
            'contract_beginning' => $this->faker->dateTimeAD,
            'contract_ending' => $this->faker->dateTimeAD,
            'position_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
