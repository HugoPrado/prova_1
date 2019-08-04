<?php

namespace App\Http\Controllers;

use App\Cadastro;
use App\FilmeFavorito;
use URL;
use Illuminate\Http\Request;

class CadastroFilmeFavoritoController extends Controller
{
    public function listaFilmes($id)
    {
        $cadastro = Cadastro::find($id);
        $filmes = FilmeFavorito::with('cadastros')->whereDoesntHave('cadastros', function($query) use ($id) {
            $query->where('id', $id);
        })->get();
        return view('relacionamentos.listafilmes', compact('filmes','cadastro'));

    }

    public function adiciona($cadastro_id,$filme_id)
    {

        $cadastro = Cadastro::find($cadastro_id);
        $cadastro->filmesFavoritos()->attach($filme_id);
        $filmes = FilmeFavorito::with('cadastros')->whereDoesntHave('cadastros', function($query) use ($cadastro_id) {
            $query->where('id', $cadastro_id);
        })->get();

        return redirect(URL::previous())->with('success', 'Item removido com sucesso!');
    }

    public function remove($cadastro_id,$filme_id)
    {
        $cadastro = Cadastro::find($cadastro_id);
        $cadastro->filmesFavoritos()->detach ($filme_id);

        // URL::previous() permite que retorne para quem chamou a função: se foi Endereço retorna para Endereço, se foi Cadastro retorna para Cadastro.
        return redirect(URL::previous())->with('success', 'Item removido com sucesso!');
    }

    public function listaCadastros($filme_id)
    {
        $filme = FilmeFavorito::find($filme_id);
        $cadastros = Cadastro::with('filmesFavoritos')->whereDoesntHave('filmesFavoritos', function($query) use ($filme_id) {
            $query->where('id', $filme_id);
        })->get();
        $tipo="filme";
        return view('relacionamentos.listaCadastros', compact('filme','cadastros','tipo'));

    }

}
