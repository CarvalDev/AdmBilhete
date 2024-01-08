<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLinhasFormRequest;
use App\Http\Requests\StoreUpdatePassageiroFormRequest;
use App\Models\Bilhete;
use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Linha;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Attribute\AsController;

class LinhasController extends Controller
{
    public function index(Linha $linha, Bilhete $bilhete){
        $linhas = $linha
        ->select('linhas.id','numLinha', 'nomeLinha')
        ->selectRaw('COUNT(carros.id) as qtdCarros')
        ->join('carros', 'linhas.id', '=', 'carros.linha_id')
        ->groupBy('id', 'numLinha', 'nomeLinha')
        ->get();

        $passagens = $bilhete
                ->select('bilhetes.id')
                ->selectRaw('COUNT(passagems.id) as passagens')
                ->join('passagems', 'bilhetes.id', 'passagems.bilhete_id')
                ->groupBy('bilhetes.id')
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

    public function register(){
        return view('linhas.register');
    }
    public function store(StoreUpdateLinhasFormRequest $request){
        $data = $request->all();
        $linha = Linha::create($data);
        $crud =Catraca::factory($data['qtdCarroLinha'])
        ->has(Carro::factory(1)
        ->for($linha)
        )
        ->create();
        return redirect()->route('linhas.index');
    }
}
