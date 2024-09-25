<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class LearningMaterial extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function course_stage(): HasOne
    {
        return $this->hasOne(CourseStage::class);
    }
}