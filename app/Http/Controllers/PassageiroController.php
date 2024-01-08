<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePassageiroFormRequest;
use App\Models\Bilhete;
use App\Models\Passageiro;
use App\Models\Passagem;
use Illuminate\Http\Request;

class PassageiroController extends Controller
{
    public function passageiroIndex(Passageiro $passageiro) {
        $passageiros = $passageiro->all();
        
        return view('passageiros.index', compact('passageiros'));
    }

    public function form(){
        return view('passageiros.form');
    }
    public function store(StoreUpdatePassageiroFormRequest $request){
        $data = $request->all();
        $data['senhaPassageiro'] = bcrypt($data['senhaPassageiro']);
        if($request->fotoPassageiro){
            $data['fotoPassageiro'] = $request->fotoPassageiro->store('passageiros');
        }
        Passageiro::create($data);
        return view('passageiros.form');
    }
    public function perfilPassageiro($id, Bilhete $bilhete, Passagem $passagens) {
        $passageiro = Passageiro::find($id);
        
        $bilhetes = $bilhete
                    ->where('passageiro_id', "$passageiro->id")
                    ->get();

        $passagens = $bilhete
                    ->select('bilhetes.id')
                    ->selectRaw('COUNT(passagems.id) as passagens')
                    ->join('passagems', 'bilhetes.id', 'passagems.bilhete_id')
                    ->groupBy('bilhetes.id')
                    ->where('passageiro_id', "$passageiro->id")
                    ->get();
        $acoes = $passageiro->acaos()->get();

        for($i=0;$i<count($acoes);$i++) {
            $data[$i] = $acoes[$i]->dataAcao;
            $separa = explode(" ", $data[$i]);
            $linha = explode("-", $separa[0]);
            $acoes[$i]->dataAcao = $linha[2]."/".$linha[1]."/".$linha[0];
        }

        return view('passageiros.perfil', compact('passageiro', 'bilhetes', 'acoes', 'passagens'));
    }
}


