<?php

namespace App\Http\Controllers;

use App\Models\Catraca;
use Illuminate\Http\Request;

class CatracaController extends Controller
{
    public function catracaIndex(Catraca $catraca) {
        $catracas = $catraca->all();
        
        return view('catracas.index',compact('catracas'));
    }
 
}
