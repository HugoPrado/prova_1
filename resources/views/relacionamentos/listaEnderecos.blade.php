@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('cadastros.detalhes.adicionar',$cadastro) }}

@include('componentes.AlertSuccess')
<a class="btn btn-primary btn-lg float-right" href="/cadastros/{{$cadastro->id}}">Voltar</a>

    <a class="btn" href="{{ URL::previous() }}">Back</a>
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
                            <form action="/cadastroenderecos/{{$cadastro->id}}/{{$item->id}}" method="post">
                                @csrf
                                <button class="btn " type="submit">adiconar</button>
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



@endsection
