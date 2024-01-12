<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePrecoFormRequest;
use App\Models\Preco;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class PrecoController extends Controller
{
    public $preco;
    
    public function index(){
        return view("preco.index");
    }
    public static function edit($id)
    {
        $preco = Preco::find($id);
        return view('preco.index', compact('preco'));
    }
  
    public static function update(StoreUpdatePrecoFormRequest $request,$id)
    {
        if(!$preco = Preco::find($id))
        return redirect()->route('preco.index');
        
        $data = $request->all();
      
        
        $preco->update($data);


        //return redirect()->route('preco.edit',['id'=>1]);

         return redirect()->action([ReajusteController::class, 'store'],compact('data'));
   
    }
}
