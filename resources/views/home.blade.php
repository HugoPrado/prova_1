@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            {{ Breadcrumbs::render('home') }}
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! <br>

                    <a href="{{ route('cadastros.index')}}" class="btn btn-primary">Cadastros</a>
                    <a href="{{ route('filmes.index')}}" class="btn btn-primary">Filmes</a>
                    <a href="{{ route('enderecos.index')}}" class="btn btn-primary">Endereços</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
