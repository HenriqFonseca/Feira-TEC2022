<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="bootstrap.rtl.min.css">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- link rel="manifest" href="/manifest.json" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<body>
    <div class="title-box">
        <h1>Endereços Cadastrados</h1>
  </div>

    <div class="container-accordion">
        @foreach ($dadosEndereco as $dadosendereco)
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" >
                    {{ $dadosendereco ->nomelocal}}
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <ul class="box-lista">
                        <li class="item-lista">
                           <p>CEP:   {{ $dadosendereco ->cep}}</p>
                        </li>
                        <li class="item-lista">
                            <p>Bairro:  {{ $dadosendereco ->bairro}}</p>
                        </li>
                        <li class="item-lista">
                            <p> {{ $dadosendereco ->logradouro}}</p>
                        </li>
                        <li class="item-lista">
                            <p>Cidade:   {{ $dadosendereco ->localidade}}</p> 
                        </li>
                        <li class="item-lista">
                            <p>UF:   {{ $dadosendereco ->uf}}</p>
                        </li>
                        <li class="item-lista">
                            <p>Horário de Funcionamento:   {{ $dadosendereco ->horario_funcionamento}}</p>
                        </li>
                        <li class="item-lista">
                            <p>Site: {{ $dadosendereco ->site_url}}</p>
                        </li>
                    </ul class="box-lista">
                </div>
              </div>
            </div>
        </div>
            <br>
 @endforeach


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
    <script src="main.js"></script>

    <style>
        *{
            font-family: 'Nunito', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        accordion-item ,h2{
            font-size: 60px;
            color: black;
            box-shadow: ;
        }
        .container-accordion{
            width: 55%;
            margin: auto;
        }
        #title{
            font-size: 80px;
            text-align: center
            margin: auto;
            top: 30px;
        }
     
        .title-box{
            padding-top: 30px;
            width: 55%;
            margin: auto;
            font-size: 80px;
            text-decoration: none;
            text-align: center;
            border-bottom: solid 2px black;
        }
        .box-lista{
            font-size: 20px;
            list-style: none;
        }
        .title-box , h1{
            font-size: 80px;
            top: 30px;
        }
    </style>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
</html>