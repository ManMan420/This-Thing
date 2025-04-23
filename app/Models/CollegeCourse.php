<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CollegeCourse extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function riasec_colleges(): HasMany
    {
        return $this->hasMany(riasecCollege::class);
    }

    public function college_careers(): HasMany
    {
        return $this->hasMany(CollegeCareers::class);
    }
}
