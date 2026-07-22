<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = 'job_postings';

    protected $fillable = [
        'title',
        'company',
        'company_initial',
        'category',
        'rate',
        'hours',
        'skills',
        'description',
        'status',
        'type',
        'posted_at',
        'applicants',
        'email',
    ];

    protected $casts = [
        'skills' => 'array',
        'posted_at' => 'date',
    ];
}
