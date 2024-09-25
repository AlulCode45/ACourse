<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class GroupStage extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function stage(): BelongsToMany
    {
        return $this->belongsToMany(CourseStage::class);
    }
}