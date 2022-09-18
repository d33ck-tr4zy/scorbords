<?php

namespace Database\Seeders;

use App\Models\DelayReason;
use App\Models\DelayReasonDelayReport;
use App\Models\DelayReport;
use App\Models\Developer;
use App\Models\DeveloperProject;
use App\Models\Efficiency;
use App\Models\Leave;
use App\Models\ManpowerUsage;
use App\Models\Project;
use App\Models\Score;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DeveloperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //truncate
        Schema::disableForeignKeyConstraints();
        Developer::truncate();
//        DeveloperProject::truncate();
//        DelayReport::truncate();
        Schema::enableForeignKeyConstraints();


        //seeding
        Developer::factory()
            ->has(Leave::factory()->count(3)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->has(ManpowerUsage::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                        'created_at' => Carbon::createFromDate(2022, rand(1,7), rand(1,28)),
                    ];
                })
            )
            ->has(Score::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(Efficiency::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(DelayReport::factory()->count(4)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->create([
                'full_name' => 'Imannuel Benny',
                'call_sign' => 'Benny',
                'email' => 'imannuel.benny@webimp.com.sg',
                'joined_date' => Carbon::createFromDate('2021', '3', '20'),
                'is_active' => true,
            ]);

        Developer::factory()
            ->has(Leave::factory()->count(3)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->has(ManpowerUsage::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                        'created_at' => Carbon::createFromDate(2022, rand(1,7), rand(1,28)),
                    ];
                })
            )
            ->has(Score::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(Efficiency::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(DelayReport::factory()->count(6)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->create([
                'full_name' => 'Kukuh Tri',
                'call_sign' => 'Kukuh',
                'email' => 'kukuh.tri@webimp.com.sg',
                'joined_date' => Carbon::createFromDate('2022', '1', '20'),
                'is_active' => true,
            ]);

        Developer::factory()
            ->has(Leave::factory()->count(3)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->has(ManpowerUsage::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                        'created_at' => Carbon::createFromDate(2022, rand(1,7), rand(1,28)),
                    ];
                })
            )
            ->has(Score::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(Efficiency::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(DelayReport::factory()->count(12)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->create([
                'full_name' => 'Satrio Budyo',
                'call_sign' => 'Satrio',
                'email' => 'satrio.budyo@webimp.com.sg',
                'joined_date' => Carbon::createFromDate('2021', '6', '20'),
                'released_date'=> Carbon::createFromDate('2022', '7', '21'),
                'is_active' => false,
            ]);

        Developer::factory()
            ->has(Leave::factory()->count(3)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->has(ManpowerUsage::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                        'created_at' => Carbon::createFromDate(2022, rand(1,7), rand(1,28)),
                    ];
                })
            )
            ->has(Score::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(Efficiency::factory()->count(20)
                ->state(function(array $attributes, Developer $developer){
                    return [
                        'developer_id' => $developer->id,
                    ];
                })
            )
            ->has(DelayReport::factory()->count(2)
                ->state(function(array $attributes, Developer $developer){
                    return ['developer_id' => $developer->id];
                })
            )
            ->create([
                'full_name' => 'Andi Eka Siswandhi',
                'call_sign' => 'Andi',
                'email' => 'andi.eka@webimp.com.sg',
                'joined_date' => Carbon::createFromDate('2021', '6', '4'),
                'is_active' => true,
            ]);

        //attaching delay reasons
        DelayReport::all()->each(function($delayReport){
           $delayReport->delayReasons()->attach(DelayReason::inRandomOrder()->take(rand(1,3))->pluck('id')->toArray());
        });

        //attaching Project to Developer
        Project::all()->each(function($project){
            $project->developer()->attach(Developer::inRandomOrder()->take(1)->pluck('id'));
        });    }
}
