<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CourseCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public function courses(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }
    function category(): HasOne
    {
        return $this->hasOne(Category::class);
    }
}