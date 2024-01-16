<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Compra;
use App\Models\Linha;
use App\Models\Passageiro;
use App\Models\Suporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Passageiro $passageiro, Compra $compra, Linha $linha, Suporte $suporte){
        $passageiro = $passageiro->all();
        $faturamento = $compra->sum('valorTotalCompra');
        $linha = $linha->all();
        $suporte = $suporte->all()->count();
        $user = Auth::guard('adm')->user();

        
        
        return view('home.index', compact('passageiro', 'faturamento', 'linha', 'suporte', 'user'));
    }

}
