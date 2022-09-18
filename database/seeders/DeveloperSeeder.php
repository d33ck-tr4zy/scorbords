<?php

namespace Database\Seeders;

use App\Models\Developer;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Developer::factory()
            ->create([
                'full_name' => 'Imannuel Benny',
                'call_sign' => 'Benny',
                'email' => ' ',
                'joined_date' => Carbon::createFromDate('2021', '3', '20'),
                'is_active' => true,
            ]);

        Developer::factory()
            ->create([
                'full_name' => 'Kukuh Tri',
                'call_sign' => 'Kukuh',
                'email' => 'kukuh.tri@webimp.com.sg',
                'joined_date' => Carbon::createFromDate('2022', '1', '20'),
                'is_active' => true,
            ]);

        Developer::factory()
            ->create([
                'full_name' => 'Satrio Budyo',
                'call_sign' => 'Satrio',
                'email' => 'satrio.budyo@webimp.com.sg',
                'joined_date' => Carbon::createFromDate('2021', '6', '20'),
                'released_date'=> Carbon::createFromDate('2022', '7', '21'),
                'is_active' => false,
            ]);

        Developer::factory()
            ->create([
                'full_name' => 'Andi Eka Siswandhi',
                'call_sign' => 'Andi',
                'email' => 'andi.eka@webimp.com.sg',
                'joined_date' => Carbon::createFromDate('2021', '6', '4'),
                'is_active' => true,
            ]);
    }
}
