<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="bootstrap.rtl.min.css">
    <link href="style.css" rel="stylesheet">
    <link rel="manifest.json" href="/manifest.json">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <a class="logo" href="{{ route ('index') }}"><img src="img/logo.png" alt="logo"></a>
            <ul class="nav-list">
                <li>
                    <a  href="{{ route ('index')}}">Cadastrar Endereço</a>
                </li>
                <li>
                    <a  href="{{ route ('enderecoscadastrados')}}">Endereços Cadastrados</a>
                </li>
            </ul>
        </nav>
    </header>
    @yield('conteudo')
    <script src="main.js"></script>
 

</body>
</html>