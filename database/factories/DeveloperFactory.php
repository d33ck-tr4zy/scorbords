<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DeveloperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'full_name' => $this->faker->name,
            'call_sign' => $this->faker->firstName,
            'email' => $this->faker->unique()->safeEmail(),
            'joined_date' => $this->faker->dateTimeBetween('-2 years', '-6 months'),

            'is_active' => $this->faker->boolean,
        ];
    }
}
