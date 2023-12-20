<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassageiroController extends Controller
{
    public function passageiroIndex() {
        return view('passageiros.index');
    }
}


