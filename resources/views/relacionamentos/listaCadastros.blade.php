@extends('layouts.app')

@section('content')

{{-- {{ Breadcrumbs::render('cadastros.detalhes.adicionar',$cadastro) }} --}}

@include('componentes.AlertSuccess')

@if ($tipo=="endereco")
<a class="btn btn-primary btn-lg float-right" href="/enderecos/{{$endereco->id}}">Voltar</a>
@endif
@if ($tipo=="filme")
<a class="btn btn-primary btn-lg float-right" href="/filmes/{{$filme->id}}">Voltar</a>
@endif


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
        @isset($cadastros)
        @foreach ($cadastros as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->nome}} {{$item->sobrenome}}</td>
            <td>{{$item->titulacao}}</td>
            <td>{{$item->CPF}}</td>
            <td>{{$item->RG}}</td>
            <td>{{$item->email}}</td>
            <td>
                @if ($tipo=="endereco")
                    <form action="/cadastroenderecos/{{$item->id}}/{{$endereco->id}}" method="post">
                @endif
                @if ($tipo=="filme")
                    <form action="/cadastrofilmes/{{$item->id}}/{{$filme->id}}" method="post">
                @endif
                    @csrf
                    <button class="btn " type="submit">adiconar</button>
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


@endsection
