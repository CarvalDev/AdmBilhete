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
    
    public function edit()
    {
        $preco = $this->model->latest();
        
        $reajustes = $this->model->getLatestsReajustes();
        
        $user = Auth::guard('adm')->user();
        return view('preco.index', compact('preco', 'reajustes', 'user'));
    }
  
    public function store(StoreUpdatePrecoFormRequest $request)
    {
        // if(!$preco = $this->model->findById($id))
        // return redirect()->route('preco.index');
        
        $data = $request->all();
        $data['meiaPassagemPreco'] = $data['passagemPreco']/2;
        
        $data['dataPreco'] = now();
        
        $this->model->create($data);


        return redirect()->route('preco.index');

        // return redirect()->action([ReajusteController::class, 'store'],compact('data'));
   
    }
}
