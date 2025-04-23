<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CollegeCareer extends Model
{
    use HasFactory;

    public function college_courses(): BelongsTo
    {
        return $this->belongsTo(CollegeCourse::class);
    }

    public function careers(): BelongsTo
    {
        return $this->belongsTo(Career::class);
    }

    public function career_college_questions(): HasMany
    {
        return $this->hasMany(CareerCollegeQuestion::class);
    }
}
