<?php

namespace App\Http\Controllers;

use App\Models\Passageiro;
use Illuminate\Http\Request;

class PassageiroController extends Controller
{
    public function passageiroIndex(Passageiro $passageiro) {
        $passageiros = $passageiro->all();
        
        return view('passageiros.index', compact('passageiros'));
    }
    public function perfilPassageiro() {
        return view('passageiros.perfil');
    }
}


