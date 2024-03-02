<?php 

namespace App\Repositories\Eloquent;

use App\Models\Passageiro;
use App\Repositories\Contracts\PassageiroRepositoryInterface;

class PassageiroRepository extends AbstractRepository implements PassageiroRepositoryInterface
{
    protected $model = Passageiro::class;

    public function __construct()
    {
        $this->model = app($this->model);
    }

    public function search(String | null $search = null)
    {
        return $this->model
            ->where('nomePassageiro','LIKE',"%{$search}%")
            ->orWhere('emailPassageiro','LIKE',"%{$search}%")
                 
                 ->paginate(10);
    }
    public function findWithAcoes($id)
    {
        return $this->model
                ->with('acaos')
                ->with('bilhetes')
                ->where('passageiros.id', $id)
                ->get();
    }
    public function allHome(){
        
      return  $this->model->all();
    }
}