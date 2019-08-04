@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('filmes') }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')


    <div>
        <a href="{{ route('filmes.create')}}" class="btn btn-primary">Novo Filme</a>
    </div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Filmes</h1>
      <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Titulo</td>
                <td>Ano de lancamento</td>
                <td>Diretor</td>
                <td colspan = 3>Actions</td>
            </tr>
        </thead>
        <tbody>
            @isset($filmes)
               @foreach ($filmes as $item)
                   <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->titulo}} </td>
                        <td>{{$item->ano_de_lancamento}}</td>
                        <td>{{$item->diretor}}</td>

                        <td>
                            <a href="{{ route('filmes.show',$item->id)}}" class="btn btn-primary">Exibir/editar</a>
                        </td>
                        <td>
                            <a href="{{ route('filmes.edit',$item->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('filmes.destroy', $item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Deletar</button>
                            </form>
                        </td>
                    </tr>
               @endforeach
            @endisset
        </tbody>
      </table>
    <div>
    </div>
    @endsection

