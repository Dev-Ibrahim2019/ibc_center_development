<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = ['auther', 'title_ar', 'title_en', 'content_ar', 'content_en', 'image_name'];
}
