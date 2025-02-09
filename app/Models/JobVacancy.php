<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobVacancy extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'department_id',
        'title',
        'description',
        'requirements',
        'status',
        'closing_date',
    ];
}
