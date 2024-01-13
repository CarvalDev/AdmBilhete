<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateLinhasFormRequest;
use App\Http\Requests\StoreUpdatePassageiroFormRequest;
use App\Models\Bilhete;
use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Consumo;
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

    public function update($id, Request $request, Linha $linha){
        $linha = $linha->find($id);
        $linha->update($request->all());
        return redirect()->route('linhas.show', $id);
        
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

    public function show($id, Linha $linhas, Carro $carro, Consumo $consumo){
        $linha = $linhas->find($id);
        $carros = $carro
                    
                    ->where('linha_id', '=', "$id")
                    ->get();

        $consumos = $consumo    
                     ->select('carros.id as carros')   
                     ->selectRaw('COUNT(consumos.id) as consumos')
                     ->join('carros', 'consumos.carro_id', 'carros.id')
                     ->where('carros.linha_id', '=', $id)
                     ->groupBy('carros.id')
                     ->get();
        $consumosFixed =null;
        $consumosTotais = null;
        for($i=0;$i<$carros->count();$i++){
            $achou =0;
            for($j=0;$j<$consumos->count();$j++){
                if($carros[$i]->id == $consumos[$j]->carros ){
                    $consumosFixed[$i] = $consumos[$j]->consumos;
                    $achou++;
                }
            }
            if($achou==0){
                $consumosFixed[$i] = 0;
            }
            $consumosTotais = $consumosTotais + $consumosFixed[$i];
        }
        return view('linhas.show', compact('linha', 'carros', 'consumosFixed', 'consumosTotais'));
    }
}
