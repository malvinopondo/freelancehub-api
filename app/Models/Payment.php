<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_title',
        'client',
        'hours',
        'rate',
        'status',
        'date',
    ];

    protected $casts = [
        'date' => 'date',
    ];
}
