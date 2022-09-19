<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalDestino;

class FormController extends Controller
{
    public function dadosEndereco(Request $dadosEndereco){ //função para pegar os dados do formulário HTML

        $nomelocal = $dadosEndereco->input('nomelocal'); //$NomeDaVariável = $dadosEndereco->input('o que foi definindo no "name" do formulario HTML')
        $cep = $dadosEndereco->input('cep');
        $logradouro = $dadosEndereco->input('logradouro');
        $bairro = $dadosEndereco->input('bairro');
        $localidade = $dadosEndereco->input('localidade');
        $uf = $dadosEndereco->input('uf');
        $horario = $dadosEndereco->input('horario');
        $url = $dadosEndereco->input('url');


        $isInsertSuccess = LocalDestino::insert(['nomelocal' => $nomelocal, //sistema de inserts: ['NomeDaTabela'=> variavel do que o usuário definiu acima ^]
        'cep' => $cep,
        'logradouro' => $logradouro,
        'bairro' => $bairro,
        'localidade' => $localidade,
        'uf' => $uf,
        'horario_funcionamento' => $horario,
        'site_url' => $url,
    
    ]);
    //para verificar se o insert deu certo
    if($isInsertSuccess){
        echo  "<script>alert('Local Registrado com sucesso!');</script>";
        return view('index' , ['Localdestino' => $dadosEndereco]);
    }else echo  "<script>alert('Erro ao registrar local');</script>";
    

    }

}