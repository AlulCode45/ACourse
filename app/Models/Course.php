<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Course extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function course_participant(): HasMany
    {
        return $this->hasMany(CourseParticipant::class);
    }
    function course_payment(): HasMany
    {
        return $this->hasMany(CoursePayment::class);
    }
    function course_images(): HasMany
    {
        return $this->hasMany(CourseImage::class);
    }
    function course_tools(): HasMany
    {
        return $this->hasMany(CourseTool::class);
    }
    function course_skill(): HasMany
    {
        return $this->hasMany(CourseSkill::class);
    }
    function course_benefit(): HasOne
    {
        return $this->hasOne(CourseBenefit::class);
    }
}