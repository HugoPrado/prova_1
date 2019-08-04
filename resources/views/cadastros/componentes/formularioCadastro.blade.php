<div class="form-group">
    <label for="nome">Nome:</label>
    <input type="text" class="form-control" name="nome" value="{{ isset($cadastro->nome) ? $cadastro->nome : old('nome') }}"/>
    @include('componentes.form-error', ['campo' => 'nome'])
</div>
<div class="form-group">
    <label for="sobrenome">Sobrenome:</label>
    <input type="text" class="form-control" name="sobrenome" value="{{ isset($cadastro->sobrenome) ? $cadastro->sobrenome : old('sobrenome') }}"/>
    @include('componentes.form-error', ['campo' => 'sobrenome'])
</div>
<div class="form-group">
   <label for="titulacao">Titulação:</label>
   <input type="text" class="form-control" name="titulacao" value="{{ isset($cadastro->titulacao) ? $cadastro->titulacao : old('titulacao') }}"/>
   @include('componentes.form-error', ['campo' => 'titulacao'])
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input type="text" class="form-control" name="email" value="{{ isset($cadastro->email) ? $cadastro->email : old('email') }}"/>
    @include('componentes.form-error', ['campo' => 'email'])
</div>
<div class="form-group">
    <label for="CPF">CPF:</label>
    <input type="text" class="form-control" name="CPF" value="{{ isset($cadastro->CPF) ? $cadastro->CPF : old('CPF') }}"/>
    @include('componentes.form-error', ['campo' => 'CPF'])
</div>
<div class="form-group">
    <label for="RG">RG:</label>
    <input type="text" class="form-control" name="RG" value="{{ isset($cadastro->RG) ? $cadastro->RG : old('RG') }}"/>
    @include('componentes.form-error', ['campo' => 'RG'])
</div>
