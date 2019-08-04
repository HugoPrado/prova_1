@extends('layouts.app')

@section('content')

{{ Breadcrumbs::render('enderecos.novo') }}

@include('componentes.AlertSuccess')
@include('componentes.btnVoltar')

<div class="row">
    <div class="col-sm-8 offset-sm-2">
       <h1 class="display-3">Novo Endereço</h1>
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
         <form method="post" action="{{ route('filmes.store') }}">
             @csrf

             @include('enderecos/componentes/formularioEndereco')

             <button type="submit" class="btn btn-primary-outline">Cadastrar</button>
         </form>
     </div>
   </div>
   </div>
   @endsection
