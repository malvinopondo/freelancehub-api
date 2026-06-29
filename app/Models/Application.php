<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_id',
        'job_title',
        'company',
        'applied_at',
        'rate',
        'hours',
        'status',
        'applicant_name',
    ];

    protected $casts = [
        'applied_at' => 'date',
    ];
}
