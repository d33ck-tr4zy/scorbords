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
         \App\Models\User::factory()->create([
             'name' => 'Gabriel Aswinta',
             'email' => 'gabriel.aswinta@webimp.com.sg',
             'is_admin' => true,
             'email_verified_at' => now(),
             'password' => Hash::make('dilarang masuk'), // password
             'remember_token' => Str::random(10),
         ]);

        \App\Models\User::factory()->create([
            'name' => 'Imannuel Benny',
            'email' => 'imannuel.benny@webimp.com.sg',
            'is_admin' => false,
            'email_verified_at' => now(),
            'password' => Hash::make('12345'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
