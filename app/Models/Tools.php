<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tools extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_tool', 'tool_id', 'course_id');
    }
}