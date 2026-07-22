<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MessageSeeder extends Seeder
{
    public function run(): void
    {
        $contacts = DB::table('contacts')->get(['id', 'name']);

        if ($contacts->isEmpty()) {
            return; // run ContactSeeder first
        }

        foreach ($contacts as $contact) {
            $messageCount = fake()->numberBetween(2, 6);

            for ($i = 0; $i < $messageCount; $i++) {
                DB::table('messages')->insert([
                    'contact_id' => $contact->id,
                    'from' => fake()->boolean() ? $contact->name : 'me',
                    'text' => fake()->sentence(fake()->numberBetween(5, 15)),
                    'time' => fake()->randomElement(['Just now', '5m ago', '1h ago', 'Yesterday', '2d ago']),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}