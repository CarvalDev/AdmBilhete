<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Models\Preco;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Contracts\PrecoRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class FaturamentoController extends Controller
{
    protected $model;
    protected $modelPreco;
    public function __construct(CompraRepositoryInterface $compra, PrecoRepositoryInterface $preco)
    {
        $this -> model = $compra;
        $this->modelPreco = $preco;
    }
    public function index(Compra $compra){
        
        $compras = $this->model->getComprasStatistics($compra);
        $taxas = $this->model->getEmissaoData();
        $precos['preco'] = $this->modelPreco->latest()->passagemPreco;
        
        $precos['reajustes'] = $this->modelPreco->getLatestsReajustes();
        foreach($precos['reajustes'] as $reajuste){
            $reajuste->dataPreco = explode(" ", $reajuste->dataPreco)[0];
            $reajuste->dataPreco = explode("-", $reajuste->dataPreco);
            $reajuste->dataPreco = $reajuste->dataPreco[1]."/".$reajuste->dataPreco[0];
        }
        $bilhetes = $this->model->comprasByTipoBilhete();
        
        $user = Auth::guard('adm')->user(); 
        return view("faturamento.index", compact('compras', 'taxas','precos', 'bilhetes' ,'user'));
    }
}