@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('enderecos') }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')


    <div>
        <a href="{{ route('enderecos.create')}}" class="btn btn-primary">Novo Endereço</a>
    </div>

<div class="row">
    <div class="col-sm-12">
        <h1 class="display-3">Endereços</h1>
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
                    @isset($enderecos)
                       @foreach ($enderecos as $item)
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
                                    <a href="{{ route('enderecos.show',$item->id)}}" class="btn btn-primary">Exibir/editar</a>
                                </td>
                                <td>
                                    <a href="{{ route('enderecos.edit',$item->id)}}" class="btn btn-primary">Editar</a>
                                </td>
                                <td>
                                    <form action="{{ route('enderecos.destroy', $item->id)}}" method="post">
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

