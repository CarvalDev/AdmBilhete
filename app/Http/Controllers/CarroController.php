<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index(Carro $carro){
        $carros = $carro
        ->join('catracas', 'catraca_id', '=', 'catracas.id')
        ->join('linhas', 'linha_id', '=', 'linhas.id')
        ->get();
        return view('carros.index', compact('carros'));
    } 
}
