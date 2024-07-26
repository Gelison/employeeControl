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
            'information_id' => Information::get()->random_int()->id,
            'date' => $this->faker->dateTimeAD,
            'division_id'=> Division::get()->random_int()->id,
            'etc_persent'=> $this->faker->randomDigit,             
            'contract_persent'=> $this->faker->randomDigit ,            
            'contract_beginning'=> $this->faker->dateTimeAD,
            'contract_ending'=> $this->faker->dateTimeAD,
            'position_id' => Position::get()->random_int()->id,
        ];
    }
}
