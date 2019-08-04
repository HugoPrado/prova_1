<?php

namespace App\Http\Controllers;

use App\Cadastro;
use Illuminate\Http\Request;


class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastros = Cadastro::all();

        return view('cadastros.index', compact('cadastros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cadastros.novoCadastro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome'=>'required',
            'sobrenome'=>'required',
            'CPF'=>'required'
        ]);
        //Noticia::create(Request::all());
        Cadastro::create($request->all());
        return redirect('/cadastros')->with('success', 'Cadastro realizado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function show(Cadastro $cadastro)
    {

        $cadastro = Cadastro::where('id','=',$cadastro->id)->with('enderecos')->with('filmesFavoritos')->get();
        $cadastro= $cadastro[0];
        return view('cadastros.exibir', compact('cadastro'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function edit(Cadastro $cadastro)
    {
        $cadastro = Cadastro::find($cadastro->id);
        return view('cadastros.editar', compact('cadastro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cadastro $cadastro)
    {
            $request->validate([
                'nome'=>'required',
                'sobrenome'=>'required',
                'CPF'=>'required'
            ]);

            $cadastro = Cadastro::find($cadastro->id);

            //Mass assignment
            $cadastro->update($request->all());

            return redirect('/cadastros')->with('success', 'Cadastro atualizado!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cadastro  $cadastro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cadastro $cadastro)
    {
        $cadastro = Cadastro::find($cadastro->idd);
        $cadastro->delete();

        return redirect('/cadastros')->with('success', 'Cadastro deletado!');
    }
}
