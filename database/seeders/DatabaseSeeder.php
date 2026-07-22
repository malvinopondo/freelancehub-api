<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JobPostingSeeder::class,   // must run before ApplicationSeeder (FK: job_id)
            ApplicationSeeder::class,
            PaymentSeeder::class,
            ContactSeeder::class,      // must run before MessageSeeder (FK: contact_id)
            MessageSeeder::class,
        ]);
    }
}
