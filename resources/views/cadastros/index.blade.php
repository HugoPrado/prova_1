@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('cadastros') }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')


<div>
    <a  href="{{ route('cadastros.create')}}" class="btn btn-primary">Novo Cadastro</a>
</div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Cadastros</h1>
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
                            <a href="{{ route('cadastros.show',$item->id)}}" class="btn btn-primary">Exibir/editar</a>
                        </td>
                        <td>
                            <a href="{{ route('cadastros.edit',$item->id)}}" class="btn btn-primary">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('cadastros.destroy', $item->id)}}" method="post">
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
