@extends('layouts.default')

@section('conteudo')
    <div class="container">
        <h1>Cadastrando Endereço</h1>
        <form method="POST" action="cadastro">
            @csrf
        <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nomelocal" name="nomelocal"required >
                <small>Nome do local</small>
            </div>
            <br>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" maxlength="9" id="cep" name="cep" required>
                <small>00000-000</small>
            </div>
            <br>
            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro"  name="logradouro" required>
                <small>Rua.</small>
            </div>
            <br>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
                <small>Bairro</small>
            </div>
            <br>
            <div class="form-group">
                <label for="localidade">Localidade</label>
                <input type="text" class="form-control" id="localidade" name="localidade" required>
                <small>Cidade</small>
            </div>
            <br>
            <div class="form-group">
                <label for="uf">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" required>
                <small>Estado</small>
            </div>
            <br>
            <div class="form-group">
                <label for="horario">Horário de Funcionamento</label>
                <input type="text" class="form-control" id="horario" name="horario" >
                <small>Hora</small>
            </div>
            <br>
            <div class="form-group">
                <label for="url">Site</label>
                <input type="text" class="form-control" id="url" name="url" >
                <small>Endereço do Site</small>
            </div>
            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
    </div>

@endsection
</html>