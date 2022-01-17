<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instantion extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'head_of_company',
        'phone',
        'email',
        'address',
        'plafond',
        'source',
        
    ];
    
}
