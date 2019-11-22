<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario; //importando a classe usuário(model)

class HomeController extends Controller
{
    public function viewHome(){
        $usuario = new Usuario();
        $listaUsuarios = $usuario->all(); //lista todos os dados que tiver dentro da tabela, como se fosse um SELECT * FROM nometabela

        //$listaUsuarios = Usuario::all(); //nessa linha é a mesma coisa que a linha 11 e 12 , resumida ela cria uma nova
        //classe e  lista os usuarios da tabela citada.

        /* echo"<pre>";
        var_dump($listaUsuarios); */
       // dd($listaUsuarios); //var_dump do laravel

       return view('Home', ["listaUsuarios"=>$listaUsuarios]); //criar um array e atribuir a lista de usuarios, isso faz
       //com que ele mostre na view as lista dos usuarios cadastrados
    }
    //exemplo de rotas parametrizadas, quando voce passa parametros na url
    public function request(Request $request, $id=0){ //$id é o parametro passado na route para puxar o id na url
        //dd($id); //var_dump e exit  // id=0 caso nao passem um valor para o parametro ele nao da erro , deixa como padrao o valor zero
        if($id == 0){
            echo "passe algum valor de id";
        }
    }
    public function exibirFormulario(){
        return view('formulario');
    }

    public function cadastrarFormulario(Request $request){
        dd($request->nome);
    }
    
}

