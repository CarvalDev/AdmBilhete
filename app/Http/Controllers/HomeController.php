<?php

namespace App\Http\Controllers;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Compra;
use App\Models\Linha;
use App\Models\Passageiro;
use App\Models\Suporte;
use App\Repositories\Contracts\BilheteRepositoryInterface;
use App\Repositories\Contracts\CatracaRepositoryInterface;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Contracts\ConsumoRepositoryInterface;
use App\Repositories\Contracts\LinhasRepositoryInterface;
use App\Repositories\Contracts\PassageiroRepositoryInterface;
use App\Repositories\Contracts\PedidoBilheteRepositoryInterface;
use App\Repositories\Contracts\SuporteRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $modelP,$modelC,$modelL,$modelS, $modelB, $modelPe, $modelCa;
    public function __construct(CatracaRepositoryInterface $catraca, PedidoBilheteRepositoryInterface $pedido,ConsumoRepositoryInterface $consumo,PassageiroRepositoryInterface $passageiro,LinhasRepositoryInterface $linha,SuporteRepositoryInterface $suporte, BilheteRepositoryInterface $bilhete)
    {
        $this->modelP = $passageiro;
        $this->modelC = $consumo;
        $this->modelL = $linha;
        $this->modelS = $suporte;
        $this->modelB = $bilhete;
        $this->modelPe = $pedido;
        $this->modelCa = $catraca;
        
    }
    public function index(){
        $passageiro = $this->modelP->allHome();
        $bilhete = $this->modelB->getEmissaoBilhetes();
        
        $consumo = $this->modelC->lastFourDays();
        $catraca = $this->modelCa->count();
        $linha = $this->modelL->allHome();
        $pedido = $this->modelPe->get();
        
        $suporte = $this->modelS->allHome();
        
        $user = Auth::guard('adm')->user();

        
        
        return view('home.index', compact('passageiro','catraca' ,'pedido' , 'bilhete' ,'consumo', 'linha', 'suporte', 'user'));
    }

}
