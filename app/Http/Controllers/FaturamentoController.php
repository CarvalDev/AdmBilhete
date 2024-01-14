<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;

class FaturamentoController extends Controller
{
    public function index(Compra $compra){
        $compras = $compra
                    ->selectRaw('COUNT(id) as compras')
                    ->selectRaw('SUM(valorTotalCompra) as valor')
                    ->get();
        
        return view("faturamento.index", compact('compras'));
    }
}