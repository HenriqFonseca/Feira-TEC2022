<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LocalDestino;

class EnderecosCadastradosController extends Controller
{
    //

    public function EnderecosCadastrados(){
        $dadosEndereco = LocalDestino::all();
        return view('enderecoscadastrados', ['dadosEndereco' => $dadosEndereco]);
    }
}
