<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePassageiroFormRequest;
use App\Models\Passageiro;
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
    public function perfilPassageiro($id) {
        $passageiro = Passageiro::find($id);

        return view('passageiros.perfil', compact('passageiro'));
    }
}


