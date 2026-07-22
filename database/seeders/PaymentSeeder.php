<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentSeeder extends Seeder
{
    public function run(): void
    {
        $statuses = ['paid', 'pending', 'overdue'];

        for ($i = 1; $i <= 12; $i++) {
            DB::table('payments')->insert([
                'job_title' => fake()->jobTitle(),
                'client' => fake()->company(),
                'hours' => fake()->numberBetween(5, 40),
                'rate' => fake()->randomFloat(2, 20, 150),
                'status' => fake()->randomElement($statuses),
                'date' => fake()->dateTimeBetween('-2 months', 'now')->format('Y-m-d'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
