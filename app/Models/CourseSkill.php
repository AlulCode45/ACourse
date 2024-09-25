<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseSkill extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
}