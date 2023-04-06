<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // SensorData::factory(10)->create();
        // \App\Models\SensorData::factory(50)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $faker = Faker::create();
        
        for ($i = 0; $i < 50; $i++) {
            DB::table('users')->insert([
                'school_id' => $faker->numberBetween($min = 1000, $max = 9999),
                'last_name' => $faker->lastName,
                'first_name' => $faker->firstName,
                'middle_initial' => $faker->randomLetter,
                'contact_number' => $faker->phoneNumber,
                'parent_cnumber' => $faker->phoneNumber,
                'department' => $faker->jobTitle,
                'email' => $faker->unique()->safeEmail,
                'password' => bcrypt('password'),
                'is_safe' => $faker->boolean
            ]);
        }
    }
}
