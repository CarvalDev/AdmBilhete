<?php

namespace App\Repositories\Eloquent;

use App\Models\Compra;
use App\Repositories\Contracts\CompraRepositoryInterface;
use App\Repositories\Eloquent\AbstractRepository;


class CompraRepository extends AbstractRepository implements CompraRepositoryInterface
{
    protected $model = Compra::class;
    public function __construct(){
        $this->model = app($this->model);
    }
    public function getComprasStatistics($compra){
        return $compra
                    ->selectRaw('COUNT(id) as compras')
                    ->selectRaw('SUM(valorTotalCompra) as valor')
                    ->get();
    }
   
}