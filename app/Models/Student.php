<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = "student_info";

    protected $fillable = [
        'firstname',
        'lastname',
        'id_number',
        'date_birth',
        'gender',
        'ethnicity',
        'email',
        'number',
        'address',
        'nationality',
    ];
}