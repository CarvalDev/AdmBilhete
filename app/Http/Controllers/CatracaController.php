<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CatracaController extends Controller
{
    public function catracaIndex() {
        return view('catracas.index');
    }
}
