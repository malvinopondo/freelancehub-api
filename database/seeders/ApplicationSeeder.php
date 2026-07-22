<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApplicationSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = DB::table('job_postings')->get(['id', 'title', 'company', 'rate', 'hours']);
        $statuses = ['pending', 'accepted', 'rejected', 'interviewing'];

        if ($jobs->isEmpty()) {
            return; // run JobPostingSeeder first
        }

        foreach ($jobs as $job) {
            $applicationsForJob = fake()->numberBetween(1, 4);

            for ($i = 0; $i < $applicationsForJob; $i++) {
                DB::table('applications')->insert([
                    'job_id' => $job->id,
                    'job_title' => $job->title,
                    'company' => $job->company,
                    'applied_at' => fake()->dateTimeBetween('-1 month', 'now')->format('Y-m-d'),
                    'rate' => $job->rate,
                    'hours' => $job->hours,
                    'status' => fake()->randomElement($statuses),
                    'applicant_name' => fake()->name(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
