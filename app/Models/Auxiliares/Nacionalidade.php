<?php

namespace App\Models\Auxiliares;

use Illuminate\Database\Eloquent\Model;

class Nacionalidade extends Model
{
    protected $table = 'nacionalidades';
    protected $fillable = [
        'descricao'
    ];
}
