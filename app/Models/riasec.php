<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class riasec extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function riasec_colleges(): HasMany
    {
        return $this->hasMany(riasecCollge::class);
    }

    public function riasec_questions(): HasMany
    {
        return $this->hasMany(RiasecQuestion::class);
    }
}
