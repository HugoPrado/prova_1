@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('filmes.detalhes',$filmes) }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')

<div class="">
    <h1 class="display-4">Filme: detalhes</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br />
    @endif
    <form method="post" action="{{ route('filmes.update', $filmes->id) }}">
        @method('PATCH')
        @csrf
        @include('filmesFavoritos/componentes/formularioFilmes')
        <button type="submit" class="btn btn-primary">Atualizar filmes</button>
    </form>
</div>

<div>
    <h1 class="display-4">Cadastros</h1>

    <form method="get" action="/enderecofilmes/{{$filmes->id}}">
        <button type="submit" class="btn btn-primary float-right">Adicionar Cadastros</button>
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Titulação</td>
                <td>CPF</td>
                <td>RG</td>
                <td>Email</td>
                <td colspan=3>Actions</td>
            </tr>
        </thead>
        <tbody>
            @isset($filmes->cadastros)
            @foreach ($filmes->cadastros as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->nome}} {{$item->sobrenome}}</td>
                <td>{{$item->titulacao}}</td>
                <td>{{$item->CPF}}</td>
                <td>{{$item->RG}}</td>
                <td>{{$item->email}}</td>
                <td>
                    <form action="/removefilmes/{{$item->id}}/{{$filmes->id}}" method="post">
                        @csrf
                        <button class="btn " type="submit">Remover</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('cadastros.show',$item->id)}}" class="btn btn-primary">Exibir/editar</a>
                </td>
            </tr>
            @endforeach
            @endisset
        </tbody>
    </table>
</div>
<form action="" method="get">
    @csrf
    <button class="btn " type="submit">Adicionar Filme</button>
</form>
@endsection
