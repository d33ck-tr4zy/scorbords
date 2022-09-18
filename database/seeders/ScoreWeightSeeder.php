<?php

namespace Database\Seeders;

use App\Models\ScoreWeight;
use Illuminate\Database\Seeder;

class ScoreWeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScoreWeight::factory()->count(20)->create();
    }
}
