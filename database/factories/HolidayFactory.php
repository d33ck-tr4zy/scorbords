<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HolidayFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->word,
            'start_date' => $this->faker->unique()->dateTimeThisYear,
            'days' => $this->faker->numberBetween(1,7),
        ];
    }
}
