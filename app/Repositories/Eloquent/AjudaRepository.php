<?php

namespace App\Repositories\Eloquent;

use App\Models\Ajuda;
use App\Repositories\Contracts\AjudaRepositoryInterface;

class AjudaRepository extends AbstractRepository implements AjudaRepositoryInterface
{
    protected $model = Ajuda::class;   
    
    public function __construct()
    {
        $this->model = app($this->model);
    }

    public function allWithCategoria()
    {
        return $this->model
            ->select('ajudas.id','ajudas.tituloAjuda as titulo', 'categoria_ajudas.nomeCategoria as categoria', 'ajudas.statusAjuda as status')
            ->with('votosAjuda')
            ->join('categoria_ajudas', 'ajudas.categoriaAjuda_id', 'categoria_ajudas.id')
            ->get();
    }
    public function countVotosAjuda()
    {
        $votos = $this->model
            ->select('ajudas.id as id')
            ->selectRaw('COUNT(votos_ajudas.id) as votos')
            ->groupBy('ajudas.id')
            ->join('votos_ajudas', 'ajudas.id', 'votos_ajudas.ajuda_id')
            ->get();
        $votosPositivos = $this->model
            ->select('ajudas.id as id')
            ->selectRaw('COUNT(votos_ajudas.id) as votosPositivos')
            ->groupBy('ajudas.id')
            ->join('votos_ajudas', 'ajudas.id', 'votos_ajudas.ajuda_id')
            ->where('votos_ajudas.util', '1')
            ->get();    
        for($i = 0; $i<count($votos);$i++){
            $votos[$i]->negativos = $votos[$i]->votos - $votosPositivos[$i]->votosPositivos;
            $votos[$i]->positivos = $votosPositivos[$i]->votosPositivos;
            $votos[$i]->porcentagemAprovacao = ($votosPositivos[$i]->votosPositivos*100)/$votos[$i]->votos;
        }

        return $votos;
        
    }
}