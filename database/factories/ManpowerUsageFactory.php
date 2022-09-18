<?php

namespace Database\Factories;

use App\Models\Developer;
use Illuminate\Database\Eloquent\Factories\Factory;

class ManpowerUsageFactory extends Factory
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
            'usage' => $this->faker->randomElement([0,16,20,24,30,40]),
            'created_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
