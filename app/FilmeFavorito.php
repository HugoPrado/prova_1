<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FilmeFavorito extends Model
{
    use SoftDeletes;
    protected $table = 'filmes_favoritos';

    protected $fillable = [
        'titulo', 'ano_de_lancamento', 'diretor',
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    function cadastros(){
        return $this->belongsToMany("App\Cadastro","cadastro_filmes_favoritos");
    }

}
