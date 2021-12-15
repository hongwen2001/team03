<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable=[
        'student_id',
        'seat_number',
        'name',
        'gender',
        'cid',
        'graduation_date',
        'start_date',
        'seat',
        'country'
    ];
}
