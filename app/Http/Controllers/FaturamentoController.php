<?php

namespace App\Http\Controllers;

use App\Models\Compra;
use App\Repositories\Contracts\CompraRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class FaturamentoController extends Controller
{
    protected $model;
    public function __construct(CompraRepositoryInterface $compra)
    {
        $this -> model = $compra;
    }
    public function index(Compra $compra){
        
        $compras = $this->model->getComprasStatistics($compra);
        $user = Auth::guard('adm')->user();
        return view("faturamento.index", compact('compras', 'user'));
    }
}