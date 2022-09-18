<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
        'course_ar',
        'course_en',
        'course_image',
        'start_at',
        'price',
        'instructor_en',
        'instructor_ar',
        'instructor_image',
        'status',
        'topics_ar',
        'topics_en',
        'objectives_ar',
        'objectives_en',
    ];
}
