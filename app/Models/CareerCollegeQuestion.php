<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CareerCollegeQuestion extends Model
{
    use HasFactory;

    public function college_careers(): BelongsTo
    {
        return $this->belongsTo(CollegeCareer::class);
    }

    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
