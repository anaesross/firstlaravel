<?php

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

// $route = new Route(); essa é a mesma forma de usar a rota, mas aqui se cria objetos. Na de baixo não se cria tantos objetos.

// $route-> get();

Route::get('/', function () { // o primeiro parâmetro é o que o usuário digita, o segundo é uma função anônima. Nesse caso retorna a view.
    return view('welcome'); //view função global
});

Route::get('/home', function(){ //function() = função anônima
    //o método(get) chama a classe(route)- class nao precisa ser criada nesse caso
    echo "Hello World!";
});
