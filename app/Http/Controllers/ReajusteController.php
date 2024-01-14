<?php

namespace App\Http\Controllers;


use App\Models\Reajuste;
use Illuminate\Http\Request;

class ReajusteController extends Controller
{
    public function index(){
        return view("reajuste.index");
    }
    public static function store(Request $request){

        
        
        $data = $request->all();
        
        
        
        
        Reajuste::create([
            'precoPassagemReajuste' => $data['data']['passagemPreco'],
            'precoMeiaPassagemReajuste' => $data['data']['passagemPreco']/2,
             'dataReajuste' => date(now())
        ]);
        return redirect()->route('preco.edit',['id'=>1]);
        
    }
}
