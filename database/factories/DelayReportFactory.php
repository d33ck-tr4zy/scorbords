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
        return [
            'developer_id' => Developer::all()->random()->id,
            'project_id' => Project::all()->random()->id,
            ''
        ];
    }
}
