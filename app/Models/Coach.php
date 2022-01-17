<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'degree',
        'school',
        'faculty',
        'major',
        'organization',
        'position_in_org',
        'project_name',
        'position_in_project',
        'skill',
        'notes',
    ];
}
