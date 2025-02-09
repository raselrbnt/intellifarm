<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $fillable = [
        'total_audiences',
        'total_clients',
        'best_review',
    ];
}
