<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="bootstrap.rtl.min.css">
    <!-- link rel="manifest" href="/manifest.json" -->
</head>
<body>
    <div class="container">
        <h1>Cadastrando Endereço</h1>
        <form method="post" action="/insertlocaldestino">
            @csrf
        <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nomelocal" name="nomelocal"required >
                <small>Nome do local</small>
            </div>
            <div class="form-group">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" maxlength="9" id="cep" name="cep" required>
                <small>00000-000</small>
            </div>
            <div class="form-group">
                <label for="logradouro">Logradouro</label>
                <input type="text" class="form-control" id="logradouro"  name="logradouro" required>
                <small>Rua.</small>
            </div>
            <div class="form-group">
                <label for="bairro">Bairro</label>
                <input type="text" class="form-control" id="bairro" name="bairro" required>
                <small>Bairro</small>
            </div>
            <div class="form-group">
                <label for="localidade">Localidade</label>
                <input type="text" class="form-control" id="localidade" name="localidade" required>
                <small>Cidade</small>
            </div>
            <div class="form-group">
                <label for="uf">UF</label>
                <input type="text" class="form-control" id="uf" name="uf" required>
                <small>Estado</small>
            </div>
            <div class="form-group">
                <label for="localidade">Horário de Funcionamento</label>
                <input type="text" class="form-control" id="horario" name="horario" >
                <small>Hora</small>
            </div>
            <div class="form-group">
                <label for="localidade">Site</label>
                <input type="text" class="form-control" id="url" name="url" >
                <small>Endereço do Site</small>
            </div>
            <button type="submit">Enviar</button>
        </form>
    </div>


    <script>
         if ('serviceWorker' in navigator) {
            navigator.serviceWorker
                .register('/sw.js')
                .then(serviceWorker => {
                    console.log('Service Worker registered: ' + serviceWorker);
                })
                .catch(error => {
                    console.log('Error registering the Service Worker: ' + error);
                });
        }
    </script>
    </script>
    <script src="main.js"></script>
</body>
</html>