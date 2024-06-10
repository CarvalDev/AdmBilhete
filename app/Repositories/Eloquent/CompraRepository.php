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
   
}