<?php

namespace App\Models\Filmes;

use App\Models\Auxiliares\Versao;
use Illuminate\Database\Eloquent\Model;

class FilmeVersao extends Model
{
    protected $table = 'filmes_versoes';
    protected $fillable = [
        'filme_id',
        'versao_id'
    ];

    public function filme(){
        return $this->hasOne(Filme::class);
    }

    public function versoes() {
        return $this->hasMany(Versao::class);
    }
}
