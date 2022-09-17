<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalDestino;

class destino_descarteController extends Controller
{
    public function pegarDados(Request $request){
        $nomelocal = $request->input('nomelocal');
        $cep = $request->input('cep');
        $logradouro = $request->input('logradouro');
        $bairro = $request->input('bairro');
        $localidade = $request->input('localidade');
        $uf = $request->input('uf');
        $horario = $request->input('horario');
        $url = $request->input('url');

        $isInsertSuccess = LocalDestino::insert(['nomelocal' => $nomelocal,
        'cep' => $cep,
        'logradouro' => $logradouro,
        'bairro' => $bairro,
        'localidade' => $localidade,
        'uf' => $uf,
        'horario_funcionamento' => $horario,
        'site_url' => $url,
    
    ]);
    if($isInsertSuccess) echo '<h1>Insert deu certo</h1>';
    else echo '<h1>Insert deu errado</h1>';
    }
}
