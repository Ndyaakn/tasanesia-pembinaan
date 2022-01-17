<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nurseries extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'head_of_company',
        'address',
        'phone',
        'email',
        'fax',
        'web',
        'bank_accountno',
        'area',
        'monthly_omzet',
        'total_capacity',
        'permanent_emp',
        'non_permanent_emp',
        'potency',
        'is_verified',
        'existing_land',
        'developing_land',
        'notes',
    ];
}
