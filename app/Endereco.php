<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Endereco extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'CEP', 'rua', 'numero', 'bairro', 'cidade', 'complemento', 'telefone','estado'
    ];

    protected $guarded = ['id', 'created_at', 'update_at'];

    function cadastros(){
        return $this->belongsToMany('App\Cadastro','cadastro_endereco');
    }

}
