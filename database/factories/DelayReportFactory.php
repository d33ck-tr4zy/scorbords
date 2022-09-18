<?php

namespace Database\Factories;

use App\Models\Developer;
use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class DelayReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $date = $this->faker->unique()->dateTimeThisYear;
        return [
            'developer_id' => Developer::all()->random()->id,
            'project_id' => Project::all()->random()->id,
            'date_assigned' => $date,
            'project_hours' => $this->faker->randomElement([8,16,24,40]),
            'additional_hours' => $this->faker->randomElement([8,16,24,40]),
            'created_at' => $date

        ];
    }
}
