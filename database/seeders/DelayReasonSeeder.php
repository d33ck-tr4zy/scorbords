<?php

namespace Database\Seeders;

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
        DB::table('delay_reasons')->insert([
            'reason' => 'Insufficient Time',
            'value' => 1,
            'description' => "Low Fault: Dev don't have control on the requirement and time allocation",
        ]);

        DB::table('delay_reasons')->insert([
            'reason' => 'Insufficient knowledge',
            'value' => 2,
            'description' => "Medium Fault: Should communicate prior to entering timeline or ask for help",
        ]);

        DB::table('delay_reasons')->insert([
            'reason' => 'Miscommunication',
            'value' => 3,
            'description' => "High Fault: Fail in doing proper communication and follow-ups",
        ]);

        DB::table('delay_reasons')->insert([
            'reason' => 'Changes in requirement',
            'value' => 0,
            'description' => "No Fault: Not caused by Dev mistake",
        ]);

        DB::table('delay_reasons')->insert([
            'reason' => 'Too much ad-hoc',
            'value' => 1,
            'description' => "Low Fault : Should be able to manage timeline",
        ]);

        DB::table('delay_reasons')->insert([
            'reason' => 'Negligence in QC',
            'value' => 3,
            'description' => "High Fault : Didn't do the due diligence",
        ]);


    }
}
