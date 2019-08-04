<div class="form-group">
    <label for="titulo">Titulo:</label>
    <input type="text" class="form-control" name="titulo" value="{{ isset($enderecos->titulo) ? $enderecos->titulo : old('titulo') }}"/>
    @include('componentes.form-error', ['campo' => 'titulo'])
</div>
<div class="form-group">
    <label for="ano_de_lancamento">Ano de Lançamento:</label>
    <input type="text" class="form-control" name="ano_de_lancamento" value="{{ isset($enderecos->ano_de_lancamento) ? $enderecos->ano_de_lancamento : old('ano_de_lancamento') }}"/>
    @include('componentes.form-error', ['campo' => 'ano_de_lancamento'])
</div>
<div class="form-group">
   <label for="diretor">Diretor:</label>
   <input type="text" class="form-control" name="diretor" value="{{ isset($enderecos->diretor) ? $enderecos->diretor : old('diretor') }}"/>
   @include('componentes.form-error', ['campo' => 'diretor'])
</div>
