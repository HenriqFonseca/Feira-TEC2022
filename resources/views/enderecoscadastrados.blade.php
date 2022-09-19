@extends('layouts.default')

@section('conteudo')
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


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    @endsection 
</html>