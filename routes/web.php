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

/* Route::get('/home', function(){ //function() = função anônima
    //o método(get) chama a classe(route)- class nao precisa ser criada nesse caso
    echo "Hello World!";
}); */

Route::get('/home', 'HomeController@viewHome');// informando o controller e o nome do método(get) criado para ser executado. O @ executa o método dentro do controller

//Route::get('/request/id/{id}', 'HomeController@request');//classe request já existe no laravel, puxa todas as informações do request q solicitar dentro do controll
Route::get('/request/id/{id?}', 'HomeController@request');//? = parametro opcional, posso informar o id ou não


Route::get('/cidade', 'CidadeController@viewCidade');


//rota parametrizada = quando a rota recebe parametros por ex: ?id=1 ou /id/1

Route::get('/formulario', 'HomeController@exibirFormulario');
Route::post('/formulario', 'HomeController@cadastrarFormulario');