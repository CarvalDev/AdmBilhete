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

    public function allWithCategoria($status = null)
{
    $query = $this->model
        ->select('ajudas.id','ajudas.tituloAjuda as titulo', 'categoria_ajudas.nomeCategoria as categoria', 'ajudas.statusAjuda as status')
        ->with('votosAjuda')
        ->join('categoria_ajudas', 'ajudas.categoriaAjuda_id', 'categoria_ajudas.id');

    if ($status !== null) {
        $query->where('ajudas.statusAjuda', $status);
    }

    return $query->paginate(15);
}
    public function countVotosAjuda()
    {
        $votos = $this->model
    ->select('ajudas.id as id')
    ->selectRaw('COUNT(votos_ajudas.id) as votos')
    ->groupBy('ajudas.id')
    ->leftJoin('votos_ajudas', 'ajudas.id', 'votos_ajudas.ajuda_id')
    ->paginate(15);

$votosPositivos = $this->model
    ->select('ajudas.id as id')
    ->selectRaw('COUNT(votos_ajudas.id) as votosPositivos')
    ->groupBy('ajudas.id')
    ->leftJoin('votos_ajudas', function ($join) {
        $join->on('ajudas.id', '=', 'votos_ajudas.ajuda_id')
            ->where('votos_ajudas.util', '=', 1);
    })
    ->paginate(15);   
    foreach ($votos as $key => $voto) {
        if ($voto->votos != 0) {
            $votos[$key]->porcentagemAprovacao = ($votosPositivos[$key]->votosPositivos * 100) / $voto->votos;
        } else {
            $votos[$key]->porcentagemAprovacao = 0; // Ou qualquer valor padrão que você deseje atribuir
        }
    }
    
    return $votos;
    
        
    }


    public function getStatus($statusAjuda){
        $data = $this->model->where('statusAjuda', $statusAjuda)->get();
        return $data;
    }
}