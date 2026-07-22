<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    public function run(): void
    {
        $roles = ['Client', 'Freelancer', 'Project Manager', 'Recruiter'];

        for ($i = 1; $i <= 10; $i++) {
            $name = fake()->name();

            DB::table('contacts')->insert([
                'name' => $name,
                'role' => fake()->randomElement($roles),
                'initial' => strtoupper(substr($name, 0, 1)),
                'last' => fake()->sentence(6),
                'time' => fake()->randomElement(['Just now', '5m ago', '1h ago', 'Yesterday', '2d ago']),
                'unread' => fake()->numberBetween(0, 5),
                'online' => fake()->boolean(40),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
