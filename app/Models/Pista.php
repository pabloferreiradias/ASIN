<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cidade;

class Pista extends Model
{
    use HasFactory;

    /**
     * The Imagem da Pista gerada aleatoriamente.
     *
     * @var string
     */
    protected $imagem_personagem = '';

    protected $fillable = ['imagem_personagem'];

    public function cidade(): BelongsTo
    {
        return $this->belongsTo(Cidade::class);
    }
}
