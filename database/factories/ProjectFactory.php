<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->words(3, true),
            'manager' => $this->faker->randomElement(['Rain Tan', 'Catherine', 'Jooleen']),
            'start_date' => $this->faker->unique()->dateTimeThisYear,
            'status' => $this->faker->randomElement(['assigned', 'UAT', 'completed'])
        ];
    }
}
