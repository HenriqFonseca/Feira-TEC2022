<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="bootstrap.rtl.min.css">
    <link href="style.css" rel="stylesheet">
    <!-- link rel="manifest" href="/manifest.json" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
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