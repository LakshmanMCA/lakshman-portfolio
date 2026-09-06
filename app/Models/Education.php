<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;
    protected $table = 'education';
    protected $fillable = [
        'institution_name',
        'degree',
        'start_date',
        'completion_date',
        'description',
        'institution_image',
        'achievements',
    ];
    protected $casts = [
        'start_date' => 'date',
        'completion_date' => 'date',
    ];
}
