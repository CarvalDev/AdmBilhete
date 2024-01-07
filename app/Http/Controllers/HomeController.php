<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Compra;
use App\Models\Passageiro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Passageiro $passageiro, Compra $compra, Carro $carro){
        $passageiro = $passageiro->all();
        $faturamento = $compra->sum('valorTotalCompra');
        $carro = $carro->all();

        
        
        return view('home.index', compact('passageiro', 'faturamento', 'carro'));
    }

}
