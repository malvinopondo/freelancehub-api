<?php

namespace Database\Seeders;
use function fake;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobPostingSeeder extends Seeder
{
    public function run(): void
    {
        $categories = ['Web Development', 'Design', 'Writing', 'Marketing', 'Mobile Development', 'Data Science'];
        $types = ['Full-time', 'Part-time', 'Contract', 'Freelance'];
        $statuses = ['open', 'closed', 'in_progress'];

        for ($i = 1; $i <= 15; $i++) {
            $company = fake()->company();

            DB::table('job_postings')->insert([
                'title' => fake()->jobTitle(),
                'company' => $company,
                'company_initial' => strtoupper(substr($company, 0, 1)),
                'category' => fake()->randomElement($categories),
                'rate' => fake()->randomFloat(2, 20, 150),
                'hours' => fake()->numberBetween(5, 40),
                'skills' => json_encode(fake()->randomElements(
                    ['PHP', 'Laravel', 'React', 'Vue', 'JavaScript', 'CSS', 'UI/UX', 'SEO', 'Copywriting', 'Python'],
                    fake()->numberBetween(2, 5)
                )),
                'description' => fake()->paragraph(4),
                'status' => fake()->randomElement($statuses),
                'type' => fake()->randomElement($types),
                'posted_at' => fake()->dateTimeBetween('-2 months', 'now')->format('Y-m-d'),
                'applicants' => fake()->numberBetween(0, 30),
                'email' => fake()->companyEmail(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
