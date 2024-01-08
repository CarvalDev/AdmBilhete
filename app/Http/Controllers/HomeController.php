<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Compra;
use App\Models\Linha;
use App\Models\Passageiro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Passageiro $passageiro, Compra $compra, Linha $linha){
        $passageiro = $passageiro->all();
        $faturamento = $compra->sum('valorTotalCompra');
        $linha = $linha->all();

        
        
        return view('home.index', compact('passageiro', 'faturamento', 'linha'));
    }

}
