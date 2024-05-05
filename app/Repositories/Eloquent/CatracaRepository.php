<?php  

namespace App\Repositories\Eloquent;

use App\Models\Carro;
use App\Models\Catraca;
use App\Repositories\Contracts\CatracaRepositoryInterface;

class CatracaRepository extends AbstractRepository implements CatracaRepositoryInterface
{
    protected $model = Catraca::class;
    

    public function __construct(){
        $this->model = app($this->model);
    }

    public function factory($linha, $qtd)
    {
        Catraca::factory($qtd)
                ->has(
                    Carro::factory(1)
                    ->for($linha)
                )
                ->create();
    }
    public function count(){
        return $this->model->where('statusCatraca','Ativa')->count();
    }
}