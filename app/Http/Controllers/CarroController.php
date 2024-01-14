<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Linha;
use Illuminate\Http\Request;

class CarroController extends Controller
{
   
    public static function updateStatus(Request $request, Carro $carro, Catraca $catraca)
    {
        $carro
        ->where('id', "$request->idCarro")
        ->update([
            'statusCarro' => $request->statusCarro
        ]);
        $carro = $carro
                    ->where('id', $request->idCarro)
                    ->get();
        
        
        if($request->statusCarro == "Ativo"){
            $statusCatraca = "Ativa";
        }else{
            $statusCatraca = "Inativa";
        }
        $id = $carro[0]->catraca_id;
        $catraca
            ->where('id', $id)
            ->update([
                'statusCatraca' => $statusCatraca
            ]);
        
        return redirect()->back();
    }

    public function store(Request $request, $idLinha, Catraca $catraca){
        $linha = Linha::find($idLinha);
        $catraca->factory($request->qtdCarro)
                ->has(
                    Carro::factory(1)
                    ->for($linha)
                )
                ->create();
        return redirect()->back();
    }
}
