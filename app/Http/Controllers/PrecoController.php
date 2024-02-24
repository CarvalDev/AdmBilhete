<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePrecoFormRequest;

use App\Models\Reajuste;
use App\Repositories\Contracts\PrecoRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class PrecoController extends Controller
{
    
    protected $model;
    public function __construct(PrecoRepositoryInterface $preco)
    {
        $this -> model = $preco;
    }
    
    public function edit( Reajuste $reajuste)
    {
        $preco = $this->model->findById(1);
        $reajustes = $this->model->getTheLastReajustes($reajuste);
        $user = Auth::guard('adm')->user();
        return view('preco.index', compact('preco', 'reajustes', 'user'));
    }
  
    public function update(StoreUpdatePrecoFormRequest $request,$id)
    {
        if(!$preco = $this->model->findById($id))
        return redirect()->route('preco.index');
        
        $data = $request->all();
      
        
        $this->model->update($id, $data);


        //return redirect()->route('preco.edit',['id'=>1]);

        return redirect()->action([ReajusteController::class, 'store'],compact('data'));
   
    }
}
