<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SocialMediaAccount extends Model
{
    protected $fillable = [
        'name',
        'icon',
        'url',
    ];
}
