<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function jobs()
    {
        $jobs = DB::table('job_postings')->get()->map(function ($job) {
            $job->skills = json_decode($job->skills, true) ?? [];
            $job->companyInitial = $job->company_initial;
            $job->postedAt = $job->posted_at;
            $job->rate = (float) $job->rate;
            return $job;
        });
        return response()->json($jobs);
    }

    public function applications()
    {
        $apps = DB::table('applications')->get()->map(function ($app) {
            $app->jobTitle = $app->job_title ?? '';
            $app->appliedAt = $app->applied_at ?? '';
            $app->applicantName = $app->applicant_name ?? '';
            $app->rate = (float) ($app->rate ?? 0);
            return $app;
        });
        return response()->json($apps);
    }

    public function payments()
    {
        $payments = DB::table('payments')->get()->map(function ($p) {
            $p->jobTitle = $p->job_title ?? '';
            $p->rate = (float) ($p->rate ?? 0);
            return $p;
        });
        return response()->json($payments);
    }

    public function contacts()
    {
        return response()->json(DB::table('contacts')->get());
    }

    public function messages()
    {
        return response()->json(DB::table('messages')->get());
    }

    public function users()
    {
        $users = DB::table('users')->get()->map(function ($u) {
            $u->joined = $u->created_at;
            $u->status = 'Active';
            $u->role = 'freelancer';
            unset($u->password);
            unset($u->remember_token);
            return $u;
        });
        return response()->json($users);
    }
}