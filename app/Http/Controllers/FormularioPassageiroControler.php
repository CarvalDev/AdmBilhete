<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioPassageiroControler extends Controller
{
    public function index(){
        return view("formulariopassageiro.index");
    }
}
