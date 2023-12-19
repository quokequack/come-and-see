<?php

namespace App\Models\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class TipoGrupo extends Model
{
    protected $table = 'tipos_grupos';
    protected $fillable = [
        'descricao'
    ];
}
