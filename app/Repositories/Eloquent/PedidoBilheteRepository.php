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
    public function search(String | null $search = null) {
        return $this->model
                    ->select('pedido_bilhetes.tipoBilhete', 'pedido_bilhetes.statusPedido', 'pedido_bilhetes.passageiro_id', 'passageiros.nomePassageiro as passageiro_nome')
                    ->join('passageiros', 'pedido_bilhetes.passageiro_id', '=', 'passageiros.id')
                    ->when($search, function ($query, $search) {
                        return $query->where(function ($q) use ($search) {
                            $q->where('pedido_bilhetes.tipoBilhete', 'LIKE', "%{$search}%")
                              ->orWhere('passageiros.nomePassageiro', 'LIKE', "%{$search}%");
                        });
                    })
                    ->orderByRaw('LENGTH(pedido_bilhetes.tipoBilhete) DESC')
                    ->paginate(10);
    }
    public function getAllpedidos(){
        return $this->model
            ->select('pedido_bilhetes.tipoBilhete', 'pedido_bilhetes.statusPedido', 'pedido_bilhetes.passageiro_id', 'passageiros.nomePassageiro as passageiro_nome')
            ->join('passageiros', 'pedido_bilhetes.passageiro_id', '=', 'passageiros.id')
            ->orderByRaw('LENGTH(pedido_bilhetes.tipoBilhete) ASC')
            ->paginate(15);
    }
    
    
}
