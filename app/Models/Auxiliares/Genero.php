<?php

namespace App\Models\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = 'generos';
    protected $fillable = [
        'descricao'
    ];
}
