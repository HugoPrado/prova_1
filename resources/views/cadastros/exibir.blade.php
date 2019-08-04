@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('cadastros.detalhes',$cadastro) }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')

<div class="container">
    <h1 class="display-4">Cadastro: detalhes</h1>

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
    <form method="post" action="{{ route('cadastros.update', $cadastro->id) }}">
        @method('PATCH')
        @csrf
        @include('cadastros/componentes/formularioCadastro')
        <button type="submit" class="btn btn-primary float-right">Atualizar Cadastro</button>
    </form>
    <br><br>
</div>

<div class="container">
    <div>
        <h1 class="display-4">Endereços associados</h1>
    <div >

        <form method="get" action="/cadastroenderecos/{{$cadastro->id}}">
            <button type="submit" class="btn btn-primary float-right">Adicionar endereco</button>
        </form>

    </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>CEP</td>
                    <td>rua</td>
                    <td>numero</td>
                    <td>bairro</td>
                    <td>cidade</td>
                    <td>estado</td>
                    <td>complemento</td>
                    <td>telefone</td>
                    <td colspan = 3>Actions</td>
                </tr>
            </thead>
            <tbody>
                @isset($cadastro->enderecos)
                @foreach ($cadastro->enderecos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->CEP}} </td>
                    <td>{{$item->rua}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->bairro}}</td>
                    <td>{{$item->cidade}} </td>
                    <td>{{$item->estado}}</td>
                    <td>{{$item->complemento}} </td>
                    <td>{{$item->telefone}}</td>
                    <td>
                        <form action="/removeenderecos/{{$cadastro->id}}/{{$item->id}}" method="post">
                            @csrf
                            <button class="btn " type="submit">Remover</button>
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('enderecos.show',$item->id)}}" class="btn btn-primary">Exibir/editar</a>
                    </td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
        <br><br>
    </div>


</div>

<div class="container">
    <h1 class="display-4">Filmes Favoritos</h1>

    <form method="get" action="/cadastrofilmes/{{$cadastro->id}}">
        <button type="submit" class="btn btn-primary float-right">Adicionar filme</button>
    </form>

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
            @isset($cadastro->filmesFavoritos)
            @foreach ($cadastro->filmesFavoritos as $item)
            <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->titulo}} </td>
                    <td>{{$item->ano_de_lancamento}}</td>
                    <td>{{$item->diretor}}</td>

                    <td>
                            <form action="/removefilmes/{{$cadastro->id}}/{{$item->id}}" method="post">
                                @csrf
                                <button class="btn " type="submit">Remover</button>
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
</div>
@endsection
