<?php

namespace App\Http\Controllers;

use App\Models\Catraca;
use App\Models\Compra;
use App\Models\Passageiro;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Passageiro $passageiro, Compra $compra, Catraca $catraca){
        $passageiro = $passageiro->all();
        $faturamento = $compra->sum('valorTotalCompra');
        $catraca = $catraca->all();

        
        
        return view('home.index', compact('passageiro', 'faturamento', 'catraca'));
    }

}
