<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(LeaveTypeSeeder::class);
        $this->call(DelayReasonSeeder::class);
        $this->call(ScoreTypeSeeder::class);
        $this->call(HolidaySeeder::class);
        $this->call(ScoreWeightSeeder::class);
        $this->call(ProjectSeeder::class);
        $this->call(DeveloperSeeder::class);
    }
}
