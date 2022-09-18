<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\LeaveType;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeaveFactory extends Factory
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
            'leave_type_id' => LeaveType::all()->random()->id,
            'start' => $this->faker->unique()->dateTimeThisYear,
            'day' => $this->faker->numberBetween(1,3),
            'reason' => $this->faker->optional()->sentence,
        ];
    }
}
