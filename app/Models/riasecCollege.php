<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class riasecCollege extends Model
{
    use HasFactory;

    public function riasecs(): BelongsTo
    {
        return $this->belongsTo(riasec::class);
    }

    public function college_courses(): BelongsTo
    {
        return $this->belongsTo(CollegeCourse::class);
    }

    public function riasec_college_questions(): HasMany
    {
        return $this->hasMany(RiasecCollegeQuestion::class);
    }
}
