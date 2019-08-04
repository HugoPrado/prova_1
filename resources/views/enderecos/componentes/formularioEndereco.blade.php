<div class="form-group">
    <label for="CEP">CEP:</label>
    <input type="text" class="form-control" name="CEP" value="{{ isset($enderecos->CEP) ? $enderecos->CEP : old('CEP') }}"/>
    @include('componentes.form-error', ['campo' => 'CEP'])
</div>
<div class="form-group">
    <label for="rua">Rua:</label>
    <input type="text" class="form-control" name="rua" value="{{ isset($enderecos->rua) ? $enderecos->rua : old('rua') }}"/>
    @include('componentes.form-error', ['campo' => 'rua'])
</div>
<div class="form-group">
   <label for="numero">numero:</label>
   <input type="text" class="form-control" name="numero" value="{{ isset($enderecos->numero) ? $enderecos->numero : old('numero') }}"/>
   @include('componentes.form-error', ['campo' => 'numero'])
</div>
<div class="form-group">
    <label for="bairro">bairro:</label>
    <input type="text" class="form-control" name="bairro" value="{{ isset($enderecos->bairro) ? $enderecos->bairro : old('bairro') }}"/>
    @include('componentes.form-error', ['campo' => 'bairro'])
</div>
<div class="form-group">
    <label for="cidade">cidade:</label>
    <input type="text" class="form-control" name="cidade" value="{{ isset($enderecos->cidade) ? $enderecos->cidade : old('cidade') }}"/>
    @include('componentes.form-error', ['campo' => 'cidade'])
</div>
<div class="form-group">
   <label for="estado">estado:</label>
   <input type="text" class="form-control" name="estado" value="{{ isset($enderecos->estado) ? $enderecos->estado : old('estado') }}"/>
   @include('componentes.form-error', ['campo' => 'estado'])
</div>
<div class="form-group">
    <label for="complemento">complemento:</label>
    <input type="text" class="form-control" name="complemento" value="{{ isset($enderecos->complemento) ? $enderecos->complemento : old('complemento') }}"/>
    @include('componentes.form-error', ['campo' => 'complemento'])
</div>
<div class="form-group">
   <label for="telefone">telefone:</label>
   <input type="text" class="form-control" name="telefone" value="{{ isset($enderecos->telefone) ? $enderecos->telefone : old('telefone') }}"/>
   @include('componentes.form-error', ['campo' => 'telefone'])
</div>
