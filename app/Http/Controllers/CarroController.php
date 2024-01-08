<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index(Carro $carro){
        
        return view('carros.index', compact('carros'));
    } 
    public static function destroy($id)
    {
        //$user = User::where('id',$id)->first();
        if(!$carros = Carro::find($id))
            return redirect()->route('carros.index');

            $carros->delete();
            return redirect()->route('carros.index');
    }
}
