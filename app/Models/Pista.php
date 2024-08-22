<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cidade;

class Pista extends Model
{
    use HasFactory;

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidade::class);
    }
}
