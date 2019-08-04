<?php

namespace App\Http\Controllers;

use App\FilmeFavorito;
use Illuminate\Http\Request;

class FilmeFavoritoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $filmes = FilmeFavorito::all();

        return view('filmesFavoritos.index', compact('filmes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('filmesFavoritos.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->ano_de_lancamento = '2000-01-01';
        // dd($request->ano_de_lancamento);
        $request->validate([
            'titulo'=>'required',
            'ano_de_lancamento'=>'nullable|date',
            'diretor'=>'required'
        ]);
        //Noticia::create(Request::all());
        FilmeFavorito::create($request->all());
        return redirect('/filmes')->with('success', 'Cadastro realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FilmeFavorito  $filmeFavorito
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $filmes = FilmeFavorito::where('id','=',$id)->with('cadastros')->get();
        $filmes= $filmes[0];
        return view('filmesFavoritos.exibir', compact('filmes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FilmeFavorito  $filmeFavorito
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $filmes = FilmeFavorito::find($id);
        return view('filmesFavoritos.editar', compact('filmes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FilmeFavorito  $filmeFavorito
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'titulo'=>'required',
            'ano_de_lancamento'=>'nullable|date',
            'diretor'=>'required'
        ]);

        $filmes = FilmeFavorito::find($id);

        //Mass assignment
        $filmes->update($request->all());

        return redirect('/filmes')->with('success', 'Filme atualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FilmeFavorito  $filmeFavorito
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $filmes = FilmeFavorito::find($id);
        $filmes->delete();

        return redirect('/filmes')->with('success', 'Filme deletado!');
    }
}
