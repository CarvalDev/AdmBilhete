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
        $passageiros =  $this->model
            ->where('nomePassageiro','LIKE',"%{$search}%")
            ->orWhere('emailPassageiro','LIKE',"%{$search}%")
                 
                 ->paginate(15);
        foreach($passageiros as $passageiro){
        $passageiro->dataNascPassageiro = explode("-",$passageiro->dataNascPassageiro);
        $passageiro->dataNascPassageiro = $passageiro->dataNascPassageiro[2]."/".$passageiro->dataNascPassageiro[1]."/".$passageiro->dataNascPassageiro[0];
        }
        return $passageiros;
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