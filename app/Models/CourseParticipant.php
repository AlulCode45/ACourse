<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CourseParticipant extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    function member(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}