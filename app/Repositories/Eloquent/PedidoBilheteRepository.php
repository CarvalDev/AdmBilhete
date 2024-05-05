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
}
