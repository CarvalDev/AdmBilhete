<?php


namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePrecoFormRequest;
use App\Repositories\Contracts\PrecoRepositoryInterface;
use Illuminate\Http\Request;

class PrecoController extends Controller
{
    protected $model;
    public function __construct(PrecoRepositoryInterface $preco)
    {
        $this -> model = $preco;
    }
        
    public function index(){
        return view("reajuste.index");
    }
    public function store(Request $request){
        $data = $request->all();
        $novoPreco = explode(" ", $data['passagemPreco']);
        $data['passagemPreco'] = (double) $novoPreco[1];
        $this->model->create($data);
        return redirect()->route('faturamento.index');
        
    }
}

