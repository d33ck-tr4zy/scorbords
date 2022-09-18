<?php

namespace Database\Seeders;

use App\Models\DelayReason;
use Illuminate\Database\Seeder;

class DelayReasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DelayReason::factory()->create([
            'reason' => 'Insufficient Time',
            'value' => 1,
            'description' => "Low Fault: Dev don't have control on the requirement and time allocation",
        ]);

        DelayReason::factory()->create([
            'reason' => 'Insufficient knowledge',
            'value' => 2,
            'description' => "Medium Fault: Should communicate prior to entering timeline or ask for help",
        ]);

        DelayReason::factory()->create([
            'reason' => 'Miscommunication',
            'value' => 3,
            'description' => "High Fault: Fail in doing proper communication and follow-ups",
        ]);

        DelayReason::factory()->create([
            'reason' => 'Changes in requirement',
            'value' => 0,
            'description' => "No Fault: Not caused by Dev mistake",
        ]);

        DelayReason::factory()->create([
            'reason' => 'Too much ad-hoc',
            'value' => 1,
            'description' => "Low Fault : Should be able to manage timeline",
        ]);

        DelayReason::factory()->create([
            'reason' => 'Negligence in QC',
            'value' => 3,
            'description' => "High Fault : Didn't do the due diligence",
        ]);


    }
}
