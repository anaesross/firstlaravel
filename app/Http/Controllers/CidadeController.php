<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cidade;

class CidadeController extends Controller
{
    public function viewCidade(){
        $cidade = new Cidade();
        $listacidades = $cidade::all();

        return view('cidade', ["listacidades"=>$listacidades]);
    }
}
