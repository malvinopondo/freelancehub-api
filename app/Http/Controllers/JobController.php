<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        return response()->json([
            ['id' => 'j1', 'title' => 'Senior React Engineer', 'company' => 'Pixelcraft Studio', 'companyInitial' => 'PS', 'category' => 'Development', 'rate' => 95, 'hours' => 80, 'skills' => ['React', 'TypeScript', 'GraphQL'], 'description' => 'Build a refreshed dashboard experience for our analytics product. Strong React + TS chops required.', 'status' => 'Open', 'type' => 'Hourly', 'postedAt' => '2026-06-18', 'applicants' => 14, 'email' => 'hire@pixelcraft.io'],
            ['id' => 'j2', 'title' => 'Brand Identity Designer', 'company' => 'Northwind Coffee', 'companyInitial' => 'NC', 'category' => 'Design', 'rate' => 70, 'hours' => 40, 'skills' => ['Figma', 'Branding'], 'description' => 'Refresh our coffee chain\'s identity — logo, packaging, in-store materials.', 'status' => 'Open', 'type' => 'Fixed', 'postedAt' => '2026-06-15', 'applicants' => 32, 'email' => 'design@northwind.co'],
            ['id' => 'j3', 'title' => 'Technical Writer — Developer Docs', 'company' => 'Forge API', 'companyInitial' => 'FA', 'category' => 'Writing', 'rate' => 55, 'hours' => 60, 'skills' => ['Copywriting', 'TypeScript'], 'description' => 'Author end-to-end developer documentation for our REST + GraphQL APIs.', 'status' => 'In Progress', 'type' => 'Hourly', 'postedAt' => '2026-06-10', 'applicants' => 9, 'email' => 'team@forgeapi.dev'],
            ['id' => 'j4', 'title' => 'Data Engineer — Pipelines', 'company' => 'Lumen Health', 'companyInitial' => 'LH', 'category' => 'Data', 'rate' => 110, 'hours' => 120, 'skills' => ['Python', 'AWS'], 'description' => 'Design and ship ETL pipelines for clinical data warehousing.', 'status' => 'Open', 'type' => 'Hourly', 'postedAt' => '2026-06-20', 'applicants' => 6, 'email' => 'talent@lumenhealth.com'],
            ['id' => 'j5', 'title' => 'Product Marketing Lead', 'company' => 'Orbital Apps', 'companyInitial' => 'OA', 'category' => 'Marketing', 'rate' => 85, 'hours' => 50, 'skills' => ['SEO', 'Copywriting'], 'description' => 'Own GTM for our upcoming mobile launch — positioning, landing, lifecycle.', 'status' => 'Completed', 'type' => 'Fixed', 'postedAt' => '2026-05-22', 'applicants' => 21, 'email' => 'hr@orbital.app'],
            ['id' => 'j6', 'title' => 'Video Editor — YouTube Channel', 'company' => 'Cascade Media', 'companyInitial' => 'CM', 'category' => 'Video', 'rate' => 45, 'hours' => 30, 'skills' => ['Premiere', 'Motion'], 'description' => 'Edit weekly long-form videos with motion graphics and color grading.', 'status' => 'Open', 'type' => 'Hourly', 'postedAt' => '2026-06-19', 'applicants' => 18, 'email' => 'edit@cascade.media'],
        ]);
    }
}
