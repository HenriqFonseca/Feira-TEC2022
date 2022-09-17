<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Models\LocalDestino;
use Illuminate\Support\Facades\Request;

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
    Route::name('Site')->group(function(){
   
        Route::get('/', [HomeController::class, "index"])->name('/.index'); 
        Route::get('user/{id}', [UserController::class, "show"])->name('user.show'); 
        //Route::get('insertlocaldestino', function(){
        //    return view('index');
        //});
        Route::post('/insertlocaldestino', function(Request $request) {
              
            $localdestino = new LocalDestino;
            $localdestino->nomelocal = $request ->nomelocal;
            $localdestino->cep = $request ->cep;
            $localdestino->bairro = $request->bairro;
            $localdestino->logradouro = $request-> logradouro;
            $localdestino->localidade = $request->localidade;
            $localdestino->uf = $request-> uf;
            $localdestino->horario_funcionamento = $request->horario;
            $localdestino->dias_funcionamento = $request->dia;
            $localdestino->site_url = $request->url;
            $localdestino.save();
            return redirect()->back()->with("sucess","Cadastro realizado com sucesso");

        });
    }); 