<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Member extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function courses()
    {
        return $this->belongsToMany(Course::class, 'course_participants');
    }
    function payments()
    {
        return $this->hasMany(CoursePayment::class);
    }
    function certificate(): HasMany
    {
        return $this->hasMany(Certificate::class);
    }
}