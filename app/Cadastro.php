<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cadastro extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'nome', 'sobrenome', 'titulacao', 'email', 'CPF', 'RG'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    function enderecos(){
        return $this->belongsToMany('App\Endereco', 'cadastro_endereco');
    }

    function filmesFavoritos(){
        return $this->belongsToMany('App\FilmeFavorito','cadastro_filmes_favoritos');
    }
}
