<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario; //importando a classe usuário(model)

class HomeController extends Controller
{
    public function viewHome(){
        $usuario = new Usuario();
        $listaUsuarios = $usuario->all(); //lista todos os dados que tiver dentro da tabela, como se fosse um SELECT * FROM nometabela
        /* echo"<pre>";
        var_dump($listaUsuarios); */
       // dd($listaUsuarios); //var_dump do laravel

       return view('Home', ["listaUsuarios"=>$listaUsuarios]); //criar um array e atribuir a lista de usuarios, isso faz
       //com que ele mostre na view as lista dos usuarios cadastrados
    }
}
