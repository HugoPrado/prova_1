<?php

namespace App\Http\Controllers;

use App\Endereco;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enderecos = Endereco::all();

        return view('enderecos.index', compact('enderecos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enderecos.novo');
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
            'CEP'=>'required',
            'rua'=>'required',
            'numero'=>'required',
            'bairro'=>'required',
            'cidade'=>'required',
            'estado'=>'required'
        ]);
        //Noticia::create(Request::all());
        Endereco::create($request->all());
        return redirect('/enderecos')->with('success', 'Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $enderecos = Endereco::where('id','=',$id)->with('cadastros')->get();
        $enderecos= $enderecos[0];
        return view('enderecos.exibir', compact('enderecos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enderecos = Endereco::find($id);
        return view('enderecos.editar', compact('enderecos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'CEP'=>'required',
            'rua'=>'required',
            'numero'=>'required',
            'bairro'=>'required',
            'cidade'=>'required',
            'CEP'=>'required',
            'estado'=>'required'
        ]);

        $enderecos = Endereco::find($id);

        //Mass assignment
        $enderecos->update($request->all());

        return redirect('/enderecos')->with('success', 'Endereço atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Endereco  $endereco
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enderecos = Endereco::find($id);
        $enderecos->delete();

        return redirect('/enderecos')->with('success', 'Endereço deletado!');
    }
}
