<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Compra;
use App\Models\Linha;
use App\Models\Passageiro;
use App\Models\Suporte;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Contracts\LinhasRepositoryInterface;
use App\Repositories\Contracts\PassageiroRepositoryInterface;
use App\Repositories\Contracts\SuporteRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $modelP,$modelC,$modelL,$modelS;
    public function __construct(PassageiroRepositoryInterface $passageiro,CompraRepositoryInterface $compra,LinhasRepositoryInterface $linha,SuporteRepositoryInterface $suporte)
    {
        $this->modelP = $passageiro;
        $this->modelC = $compra;
        $this->modelL = $linha;
        $this->modelS = $suporte;
    }
    public function index(){
        $passageiro = $this->modelP->allHome();
        $faturamento = $this->modelC->sumHome();
        $linha = $this->modelL->allHome();
        $suporte = $this->modelS->allHome();
        $user = Auth::guard('adm')->user();

        
        
        return view('home.index', compact('passageiro', 'faturamento', 'linha', 'suporte', 'user'));
    }

}
