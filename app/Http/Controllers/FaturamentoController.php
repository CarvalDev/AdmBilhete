<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaturamentoController extends Controller
{
    public function index(Compra $compra){
        $compras = $compra
                    ->selectRaw('COUNT(id) as compras')
                    ->selectRaw('SUM(valorTotalCompra) as valor')
                    ->get();
        $user = Auth::guard('adm')->user();
        return view("faturamento.index", compact('compras', 'user'));
    }
}