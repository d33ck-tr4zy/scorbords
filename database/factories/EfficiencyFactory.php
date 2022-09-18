<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

class EfficiencyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'developer_id'=>Developer::all()->random()->id,
            'date' => $this->faker->unique()->dateTimeThisYear,
            'value' => $this->faker->randomFloat(2,40,80),
        ];
    }
}
