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

    public function all($search)
    {
        return $this->model
            ->where(function($query) use ($search){
                if($search !=null){
                    $query->where('nomePassageiro','LIKE',"%{$search}%");
                    $query->orWhere('emailPassageiro','LIKE',"%{$search}%");
                }
            })->get();
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