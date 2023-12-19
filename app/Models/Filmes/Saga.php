<?php

namespace App\Models\Filmes;

use App\Models\Auxiliares\TipoGrupo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Saga extends Model
{
    protected $table = 'sagas';
    protected $fillable = [
        'descricao',
        'filme_id',
        'tipo_grupo_id'
    ];

    public function filme() : HasOne {
        return $this->hasOne(Filme::class);
    }

    public function tipo() : HasOne {
        return $this->hasOne(TipoGrupo::class);
    }
}
