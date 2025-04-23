<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Question extends Model
{
    use HasFactory;

    protected $fillable = ['question'];

    public function riasec_questions(): HasMany
    {
        return $this->hasMany(RiasecQuestion::class);
    }

    public function riasec_college_questions(): HasMany
    {
        return $this->hasMany(RiasecCollegeQuestion::class);
    }

    public function college_career_questions(): HasMany
    {
        return $this->hasMany(CareerCollegeQuestions::class);
    }
}
