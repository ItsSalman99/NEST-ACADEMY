<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'first_name',
        'last_name',
        'email',
        'dob',
        'gender',
        'phone',
        'is_active'
    ];
}
