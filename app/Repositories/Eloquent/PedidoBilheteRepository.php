<?php  

namespace  App\Repositories\Eloquent;

use App\Models\PedidoBilhete;
use App\Repositories\Contracts\PedidoBilheteRepositoryInterface;

class PedidoBilheteRepository extends AbstractRepository implements PedidoBilheteRepositoryInterface
{
    protected $model = PedidoBilhete::class;

    public function __construct()
    {
        $this->model = app($this->model);
    }
    public function get()
    {
        return $this->model
                    ->where('statusPedido', 'Aberto')
                    ->count();
    }
    public function search(String | null $search = null){
            
        return $this->model
                    ->where('tipoBilhete', 'LIKE', "%{$search}%")
                    ->orderByRaw('LENGTH(tipoBilhete) DESC')
                    ->paginate(10);
    }
    public function getAllpedidos(){
            
        return $this->model
        ->select('tipoBilhete','statusPedido','passageiro_id')
        ->orderByRaw('LENGTH(tipoBilhete) ASC')
        ->paginate(15);
    }
    
}
