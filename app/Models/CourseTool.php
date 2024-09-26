<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class CourseTool extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    function course(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_tool');
    }
    function tools()
    {
        return $this->belongsToMany(Tools::class, 'tools');
    }
}