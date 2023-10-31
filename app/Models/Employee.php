<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $casts = [
        'items' => 'array'
    ];

    protected $fillable = [
        'name',
        'last_name',
        'middle_name',
        'date_birth',
        'phone',
        'ssn',
        'street',
        'city',
        'state',
        'zip',
        'date_hire',
        'facility',
        'position',
        'date_termination',
        'description',
        'items',
    ];
}
