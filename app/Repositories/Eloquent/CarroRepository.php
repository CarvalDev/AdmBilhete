<?php  

namespace App\Repositories\Eloquent;

use App\Models\Carro;
use App\Repositories\Contracts\CarroRepositoryInterface;

class CarroRepository extends AbstractRepository implements CarroRepositoryInterface
{
    protected $model = Carro::class;
    public function __construct()
    {
        $this->model = app($this->model);
    }
}