<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Cidade;

class Caso extends Model
{
    use HasFactory;

    protected $fillable = ['cidade_crime_id', 'cidade_destino_1_id', 'cidade_destino_2_id', 'cidade_destino_3_id'];

    public function cidadeCrime(): HasOne
    {
        return $this->hasOne(Cidade::class, 'cidade_crime_id');
    }

    public function CidadeDestino1(): HasOne
    {
        return $this->hasOne(Cidade::class, 'cidade_destino_1_id');
    }

    public function CidadeDestino2(): HasOne
    {
        return $this->hasOne(Cidade::class, 'cidade_destino_2_id');
    }

    public function CidadeDestino3(): HasOne
    {
        return $this->hasOne(Cidade::class, 'cidade_destino_3_id');
    }
}
