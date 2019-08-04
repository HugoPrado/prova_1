@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('cadastros.detalhes.adicionar',$cadastro) }}

@include('componentes.AlertSuccess')
<a class="btn btn-primary btn-lg float-right" href="/cadastros/{{$cadastro->id}}">Voltar</a>

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
                                <form action="/cadastrofilmes/{{$cadastro->id}}/{{$item->id}}" method="post">
                                    @csrf
                                    <button class="btn " type="submit">adiconar</button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('filmes.show',$item->id)}}" class="btn btn-primary">Exibir/editar</a>
                            </td>
                    </tr>
               @endforeach
            @endisset
        </tbody>
      </table>



@endsection
