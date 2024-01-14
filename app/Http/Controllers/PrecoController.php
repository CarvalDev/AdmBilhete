<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePrecoFormRequest;
use App\Models\Preco;
use App\Models\Reajuste;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
class PrecoController extends Controller
{
    public $preco;
    
    public function index(){
        return view("preco.index"); 
    }
    public static function edit($id, Reajuste $reajuste)
    {
        $preco = Preco::find($id);
        $reajustes = $reajuste
                        ->orderBy('dataReajuste', 'desc')
                        ->get();
        
        return view('preco.index', compact('preco', 'reajustes'));
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
