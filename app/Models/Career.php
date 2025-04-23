<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Career extends Model
{
    use HasFactory;
    
    protected $fillable = ['name', 'description'];

    public function college_careers(): HasMany
    {
        return $this->hasMany(CollegeCareer::class);
    }
}
