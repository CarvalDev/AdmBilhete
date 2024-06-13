<?php

namespace App\Repositories\Eloquent;

use App\Models\Compra;
use App\Models\TaxaEmissao;
use App\Models\TaxaEmissaoPreco;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Eloquent\AbstractRepository;


class CompraRepository extends AbstractRepository implements CompraRepositoryInterface
{
    protected $model = Compra::class;
    protected $modelTaxa = TaxaEmissao::class;
    public function __construct(){
        $this->model = app($this->model);
        $this->modelTaxa = app($this->modelTaxa);
    }
    public function getComprasStatistics($compra){
        $compras =  $compra
                    ->selectRaw('COUNT(id) as compras')
                    ->selectRaw('SUM(valorTotalCompra) as valor')
                    ->get();
        $ultimaSemana = now()->subWeek();
        $semanaRetrasada = now()->subWeeks(2);
        $compras[0]['lastWeek'] = $compra
                                    ->selectRaw('SUM(valorTotalCompra) as valor')
                                    ->join('acaos', 'compras.acao_id', 'acaos.id')
                                    ->whereBetween('acaos.dataAcao', [$ultimaSemana, now()])
                                    ->get()[0]
                                    ->valor;
        $compras[0]['twoWeeksAgo'] = $compra
                                    ->selectRaw('SUM(valorTotalCompra) as valor')
                                    ->join('acaos', 'compras.acao_id', 'acaos.id')
                                    ->whereBetween('acaos.dataAcao', [$semanaRetrasada, $ultimaSemana])
                                    ->get()[0]
                                    ->valor;
        $compras[0]['lastWeek'] =  number_format(($compras[0]['lastWeek']*100)/$compras[0]['valor'], 2, ',', ',');
        $compras[0]['twoWeeksAgo'] =  number_format(($compras[0]['twoWeeksAgo']*100)/$compras[0]['valor'], 2, ',', ',');
        if($compras[0]['lastWeek'] > $compras[0]['twoWeeksAgo'] ){
            $compras[0]['aumento'] = true;
        }else{
            $compras[0]['aumento'] = false;
        }
        return $compras;
    }
    public function sumHome(){
        return  $this->model->sum('valorTotalCompra');
    }
    public function getEmissaoData()
    {
        $taxas = $this->modelTaxa
                    ->selectRaw('COUNT(id) as taxas')
                    ->get();
        $taxas[0]['valor'] = $taxas[0]->taxas * TaxaEmissaoPreco::find(1)->taxa;
        $ultimaSemana = now()->subWeek();
        $semanaRetrasada = now()->subWeeks(2);
        $taxas[0]['lastWeek'] = $this->modelTaxa
                                    ->selectRaw('COUNT(taxa_emissaos.id) as valor')
                                    
                                    ->whereBetween('created_at', [$ultimaSemana, now()])
                                    ->get()[0]
                                    ->valor;
        $taxas[0]['twoWeeksAgo'] = $this->modelTaxa
                                    ->selectRaw('COUNT(id) as valor')
                                    
                                    ->whereBetween('created_at', [$semanaRetrasada, $ultimaSemana])
                                    ->get()[0]
                                    ->valor;
        
        $taxas[0]['lastWeek'] =  number_format(($taxas[0]['lastWeek']*100)/$taxas[0]['taxas'], 2, ',', ',');

        $taxas[0]['twoWeeksAgo'] =  number_format(($taxas[0]['twoWeeksAgo']*100)/$taxas[0]['valor'], 2, ',', ',');
        if($taxas[0]['lastWeek'] > $taxas[0]['twoWeeksAgo'] ){
            $taxas[0]['aumento'] = true;
        }else{
            $taxas[0]['aumento'] = false;
        }
        return $taxas;
    }
    public function comprasByTipoBilhete()
    {
        $data['estudante'] = $this->model
                        ->select('compras.id')
                        ->join('bilhetes', 'compras.bilhete_id', 'bilhetes.id')
                        ->where('bilhetes.tipoBilhete', "Estudante")
                        ->count();
        $data['estudante_meia'] = $this->model
                        ->select('compras.id')
                        ->join('bilhetes', 'compras.bilhete_id', 'bilhetes.id')
                        ->where('bilhetes.tipoBilhete', "Estudante Ins. Privada")
                        ->count();
        $data['comum'] = $this->model
                        ->select('compras.id')
                        ->join('bilhetes', 'compras.bilhete_id', 'bilhetes.id')
                        ->where('bilhetes.tipoBilhete', "Comum")
                        ->count();
        return $data;
                        
    }
    public function getFluxo($intervalo)
    {
        switch($intervalo){
            case "anual":
                for($i=1;$i<13;$i++){
                    $tempoInicial = now()->subMonths($i);
                    if($i == 1){
                        $tempoFinal = now();
                    }else{
                        $tempoFinal = now()->subMonths($i-1);
                    }
                    $resultado[$i-1]["mes"] = $this->model
                    ->selectRaw('SUM(valorTotalCompra) as valor')
                    ->join('acaos', 'compras.acao_id', 'acaos.id')
                    ->whereBetween('acaos.dataAcao', [$tempoInicial, $tempoFinal])
                    ->get()[0]
                    ->valor;
                }
                return $resultado;
                
            case "semestral":
                for($i=1;$i<13;$i++){
                    $semanas = 2*$i;
                    $tempoInicial = now()->subWeeks($semanas);
                    if($i == 1){
                        $tempoFinal = now();
                    }else{
                        $tempoFinal = now()->subWeeks($semanas-2);
                    }
                    $query = $this->model
                    
                    ->selectRaw('SUM(valorTotalCompra) as valor')
                    ->join('acaos', 'compras.acao_id', 'acaos.id')
                    ->whereBetween('acaos.dataAcao', [$tempoInicial, $tempoFinal])
                    ->get()[0]
                    ->valor;
                    $resultado["valores"][$i-1]["semana"] = $query;
                 
                    $data = $tempoInicial->toDateString();
                    $data = explode("-", $data);
                    $data = $data[2]."/".$data[1];
                    $resultado["datas"][$i-1]['data'] = $data; 
                }
                return $resultado;
                
                case "trimestral":
                    for($i=1;$i<13;$i++){
                        
                        $tempoInicial = now()->subWeeks($i);
                        if($i == 1){
                            $tempoFinal = now();
                        }else{
                            $tempoFinal = now()->subWeeks($i-1);
                        }
                        $resultado["valores"][$i-1]["semana"] = $this->model
                        ->selectRaw('SUM(valorTotalCompra) as valor')
                        ->join('acaos', 'compras.acao_id', 'acaos.id')
                        ->whereBetween('acaos.dataAcao', [$tempoInicial, $tempoFinal])
                        ->get()[0]
                        ->valor;
                        $data = $tempoInicial->toDateString();
                    $data = explode("-", $data);
                    $data = $data[2]."/".$data[1];
                    $resultado["datas"][$i-1]['data'] = $data; 
                    }
                    return $resultado;
                    
                    case "mensal":
                        for($i=1;$i<13;$i++){
                            $dias = 3*$i;
                            $tempoInicial = now()->subDays($dias);
                            if($i == 1){
                                $tempoFinal = now();
                            }else{
                                $tempoFinal = now()->subDays($dias -3);
                            }
                            $resultado["valores"][$i-1]["semana"] = $this->model
                            ->selectRaw('SUM(valorTotalCompra) as valor')
                            ->join('acaos', 'compras.acao_id', 'acaos.id')
                            ->whereBetween('acaos.dataAcao', [$tempoInicial, $tempoFinal])
                            ->get()[0]
                            ->valor;
                            $data = $tempoInicial->toDateString();
                    $data = explode("-", $data);
                    $data = $data[2]."/".$data[1];
                    $resultado["datas"][$i-1]['data'] = $data; 
                        }
                        return $resultado;
                        
            default:
                    return;
        }
        }
       
   
}