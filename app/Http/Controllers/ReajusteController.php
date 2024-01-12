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
        Reajuste::create($data);
        dd($data);
        //return redirect()->route('preco.edit',['id'=>1]);
    }
}
