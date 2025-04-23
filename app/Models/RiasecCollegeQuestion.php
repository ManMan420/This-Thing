<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiasecCollegeQuestion extends Model
{
    use HasFactory;

    public function riasec_colleges(): BelongsTo
    {
        return $this->BelongsTo(RiasecCollege::class);
    }

    public function questions(): BelongsTo
    {
        return $this->BelongsTo(Question::class);
    }
}
