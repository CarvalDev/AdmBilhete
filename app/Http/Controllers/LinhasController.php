<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Linha;
use Illuminate\Http\Request;

class LinhasController extends Controller
{
    public function index(Linha $linha){
        $linhas = $linha
        ->select('linhas.id','numLinha', 'nomeLinha')
        ->selectRaw('COUNT(carros.id) as qtdCarros')
        ->join('carros', 'linhas.id', '=', 'carros.linha_id')
        ->groupBy('id', 'numLinha', 'nomeLinha')
        ->get();
       

       $consumos = $linha
        ->select('linhas.id')
        ->selectRaw('COUNT(consumos.id) as qtdConsumos')
        ->join('carros', 'linhas.id', '=', 'carros.linha_id')
        ->join('consumos', 'carros.id', 'consumos.carro_id')
        ->groupBy('linhas.id')
        ->get();
        return view('linhas.index', compact('linhas', 'consumos'));
    }
}
