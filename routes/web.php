<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\EnderecosCadastradosController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\LocalDestino;
use Illuminate\Support\Facades\Request;
use function GuzzleHttp\Promise\all;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
      // Route::get('/enderecos-cadastrados/{$id_destino_descarte}', destino_descarteController::class, 'dadosEndereco');

       // Route::get('enderecos-cadastrados/',  function(){
       //   $LocalDestino = LocalDestino::all(0);
        //  return view('enderecos-cadastrados', ['LocalDestino' => $LocalDestino]);
        //});


        Route::post('/cadastro', [FormController::class, 'dadosEndereco']); //pegar dados do formulario

        Route::get('/', [HomeController::class, 'home'])->name('index');//rota para a home

        Route::get('/enderecoscadastrados',[EnderecosCadastradosController::class , 'EnderecosCadastrados'])-> name('enderecoscadastrados');
        //Route::get('/enderecoscadastrados/{id_destino_descarte}', [EnderecosCadastradosController::class], 'EnderecosCadastrado'); //rota para endereços cadastrados

       // Route::get('enderecoscadastrados/{id_destino_descarte}', function($id_destino_descarte){ //rota para endereços cadastrados
       //   $LocalDestino = LocalDestino::findOrFail($id_destino_descarte);
       //   echo "$LocalDestino->nomelocal";
        //  //return view('enderecoscadastrados', ['LocalDestino' => $LocalDestino]);
       // })-> name('enderecoscadastrados');
