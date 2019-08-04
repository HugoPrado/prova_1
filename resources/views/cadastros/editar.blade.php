@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('cadastros.editar',$cadastro) }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')


<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editar cadastro</h1>

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


            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</div>
@endsection
