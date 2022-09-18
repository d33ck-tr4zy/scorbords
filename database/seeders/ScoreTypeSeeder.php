<?php

namespace Database\Seeders;

use App\Models\ScoreType;
use Illuminate\Database\Seeder;

class ScoreTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ScoreType::factory()->create(
            [
                'name' => 'Speed',
                'description'=> 'How fast a member found a solution to a problem',
            ]
        );
        ScoreType::factory()->create(
            [
                'name' => 'Communication',
                'description'=> 'How good team members communication with their peers',
            ]
        );
        ScoreType::factory()->create(
            [
                'name' => 'Quality',
                'description'=> 'How good the quality of the works',
            ]
        );
        ScoreType::factory()->create(
            [
                'name' => 'Punctual',
                'description'=> 'Is there any delays on their assignments',
            ]
        );
    }
}
