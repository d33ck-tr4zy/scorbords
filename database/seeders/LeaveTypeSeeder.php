<?php

namespace Database\Seeders;

use App\Models\LeaveType;
use Illuminate\Database\Seeder;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeaveType::factory()->create([
            'name' => 'Sick Leave',
            'abbr' => 'SL',
        ]);

        LeaveType::factory()->create([
            'name' => 'Off In Liew',
            'abbr' => 'OIL',
        ]);

        LeaveType::factory()->create([
            'name' => 'Annual Leave',
            'abbr' => 'AL',
        ]);

        LeaveType::factory()->create([
            'name' => 'Birthday Leave',
            'abbr' => 'BL',
        ]);
    }
}
