<?php

namespace App\Models\Filmes;

use App\Models\Auxiliares\Genero;
use App\Models\Auxiliares\Nacionalidade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Filme extends Model
{
    protected $table = 'filmes';
    protected $fillable = [
        'nome',
        'sinopse',
        'diretor',
        'ano',
        'nacionalidade_id',
        'genero_id',
        'duracao',
        'remake'
    ];

    public function nacionalidade() : BelongsTo {
        return $this->belongsTo(Nacionalidade::class);
    }

    public function genero() : BelongsTo {
        return $this->belongsTo(Genero::class);
    }
}
