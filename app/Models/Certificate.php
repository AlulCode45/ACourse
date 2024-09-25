<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Certificate extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    function courses(): HasOne
    {
        return $this->hasOne(Course::class);
    }
    function member(): HasOne
    {
        return $this->hasOne(User::class);
    }
}