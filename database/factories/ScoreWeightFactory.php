<?php

namespace Database\Factories;

use App\Models\ScoreType;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreWeightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'score_type_id' => ScoreType::all()->random()->id,
            'month_year' => $this->faker->dateTimeThisYear,
            'weight' => $this->faker->randomElement([30, 40, 50]),
        ];
    }
}
