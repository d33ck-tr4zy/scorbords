<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\ScoreType;
use Illuminate\Database\Eloquent\Factories\Factory;

class ScoreFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'developer_id' => Developer::all()->random()->id,
            'score_type_id' => ScoreType::all()->random()->id,
            'score' => $this->faker->randomFloat(2, 30, 90),
            'created_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
