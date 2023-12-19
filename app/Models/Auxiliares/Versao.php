<?php

namespace App\Models\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class Versao extends Model
{
    protected $table = 'versoes';
    protected $fillable = [
        'descricao'
    ];
}
