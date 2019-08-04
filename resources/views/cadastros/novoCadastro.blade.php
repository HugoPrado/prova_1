@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('cadastros.novo') }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')

<a class="btn btn-primary btn-lg float-right" href="{{ URL::previous() }}">Voltar</a>

<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Novo cadastro</h1>
     <div>
       @if ($errors->any())
         <div class="alert alert-danger">
           <ul>
               @foreach ($errors->all() as $error)
                 <li>{{ $error }}</li>
               @endforeach
           </ul>
         </div><br />
       @endif
         <form method="post" action="{{ route('cadastros.store') }}">
             @csrf
             @include('cadastros/componentes/formularioCadastro')
             <button type="submit" class="btn btn-primary-outline">Cadastrar</button>
         </form>
     </div>
   </div>
   </div>
   @endsection
