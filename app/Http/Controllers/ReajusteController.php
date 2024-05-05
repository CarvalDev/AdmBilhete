<?php

namespace App\Http\Controllers;



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
        $this->model->create($data);
        return redirect()->route('preco.index');
        
    }
}
