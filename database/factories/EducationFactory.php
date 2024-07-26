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
            'information_id' => Information::get()->random_int()->id,
            'date' => $this->faker->dateTimeAD,
            'doctype_id' => Doctype::get()->random_int()->id,
            'number' => $this->faker->randomNumber(1000, false),
            'level_id' => Level::get()->random_int()->id,
            'qualification' => $this->faker->word,
            'speciality' => $this->faker->word,
            'rank' => $this->faker->word,
            'education_form' => $this->faker->word,
            'institution' => $this->faker->word,



            // 'name' => fake()->name(),
        ];
    }
}
