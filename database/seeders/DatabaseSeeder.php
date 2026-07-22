<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            JobPostingSeeder::class,
            ApplicationSeeder::class,
            ContactSeeder::class,
            MessageSeeder::class,
            PaymentSeeder::class,
        ]);
    }
}