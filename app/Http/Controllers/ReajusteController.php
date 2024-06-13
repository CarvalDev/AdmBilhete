<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePrecoFormRequest;
use App\Repositories\Contracts\ReajusteRepositoryInterface;
use Illuminate\Http\Request;

class ReajusteController extends Controller
{
    protected $model;
    public function __construct(ReajusteRepositoryInterface $reajuste)
    {
        $this -> model = $reajuste;
    }
        
    public function index(){
        return view("reajuste.index");
    }
    public function store(Request $request){
        $data = $request->all();
        $novoPreco = (int)(explode(" ", $data['passagemPreco']));
        $data['passagemPreco'] = $novoPreco;
        $this->model->create($data);
        return redirect()->route('faturamento.index');
        
    }
}
