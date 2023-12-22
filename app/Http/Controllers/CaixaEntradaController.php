<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaixaEntradaController extends Controller
{
    public function caixaIndex() {
        return view('caixaEntrada.index');
    }
}
