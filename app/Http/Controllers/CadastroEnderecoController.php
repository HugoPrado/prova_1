<?php

namespace App\Http\Controllers;

use App\Cadastro;
use App\Endereco;
use URL;
use Illuminate\Http\Request;

class CadastroEnderecoController extends Controller
{
    /**
     * lista endereços para vincular a cadastros.
     *
     * @return \Illuminate\Http\Response
     */
    public function listaEnderecos($cadastro_id)
    {
        $cadastro = Cadastro::find($cadastro_id);
        $enderecos = Endereco::with('cadastros')->whereDoesntHave('cadastros', function($query) use ($cadastro_id) {
            $query->where('id', $cadastro_id);
        })->get();
        return view('relacionamentos.listaEnderecos', compact('enderecos','cadastro'));

    }

    public function adiciona($cadastro_id,$filme_id)
    {

        $cadastro = Cadastro::find($cadastro_id);
        $cadastro->enderecos()->attach($filme_id);
        $enderecos = Endereco::with('cadastros')->whereDoesntHave('cadastros', function($query) use ($cadastro_id) {
            $query->where('id', $cadastro_id);
        })->get();

        return redirect(URL::previous())->with('success', 'Cadastro adicionado com sucesso!');;
    }

    public function remove($cadastro_id,$filme_id)
    {
        $cadastro = Cadastro::find($cadastro_id);
        $cadastro->enderecos()->detach ($filme_id);

        // URL::previous() permite que retorne para quem chamou a função: se foi Endereço retorna para Endereço, se foi Filme retorna para Filme.
        return redirect(URL::previous())->with('success', 'Endereço removido com sucesso!');;
    }

    public function listaCadastros($endereco_id)
    {
        $endereco = Endereco::find($endereco_id);
        $cadastros = Cadastro::with('enderecos')->whereDoesntHave('enderecos', function($query) use ($endereco_id) {
            $query->where('id', $endereco_id);
        })->get();
        $tipo="endereco";
        return view('relacionamentos.listaCadastros', compact('endereco','cadastros','tipo'));

    }

}
