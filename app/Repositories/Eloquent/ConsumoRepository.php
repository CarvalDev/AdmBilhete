<?php  

namespace App\Repositories\Eloquent;

use App\Models\Consumo;
use App\Repositories\Contracts\ConsumoRepositoryInterface;

class ConsumoRepository extends AbstractRepository implements ConsumoRepositoryInterface
{
    protected $model = Consumo::class;
    public function __construct(){
        $this->model = app($this->model);
    }
    public function countConsumosByCars($idLinha)
    {
        return  $this->model     
            ->select('carros.id as id')   
            ->selectRaw('COUNT(consumos.id) as qtdConsumos')
            ->join('carros', 'consumos.carro_id', 'carros.id')
            ->where('carros.linha_id', '=', $idLinha)
            ->groupBy('carros.id')
            ->get();
    }
    public function countConsumosByLinha($idLinha)
    {
        return $this->model
                        ->selectRaw('COUNT(consumos.id) as qtdConsumos')
                        ->join('carros', 'consumos.carro_id', '=', 'carros.id')
                        ->groupBy('carros.linha_id')
                        ->where('carros.linha_id', $idLinha)
                        ->get();
    }
}