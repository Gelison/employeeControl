<?php

namespace Database\Factories;

use App\Models\Doctype;
use App\Models\Information;
use App\Models\Level;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\education>
 */
class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'information_id' => $this->faker->numberBetween(1,10),
            'date' => $this->faker->dateTimeAD,
            'doctype_id' =>$this->faker->numberBetween(1,10),
            'number' => random_int(1000, 2000),
            'level_id' =>$this->faker->numberBetween(1,10),
            'qualification' => $this->faker->word,
            'speciality' => $this->faker->word,
            'rank' => $this->faker->word,
            'education_form' => $this->faker->word,
            'institution' => $this->faker->word,



            // 'name' => fake()->name(),
        ];
    }
}
