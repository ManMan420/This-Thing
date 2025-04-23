<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RiasecQuestion extends Model
{
    use HasFactory;

    public function riasecs(): BelongsTo
    {
        return $this->belongsTo(riasec::class);
    }

    public function questions(): BelongsTo
    {
        return $this->belongsTo(Question::class);
    }
}
