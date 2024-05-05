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

    public function search($search, $status)
    {
        
        

        $passageiros =  $this->model
        ->where(function($query) use ($search, $status){
            if($search !=null){
                $query->where('nomePassageiro','LIKE',"%{$search}%");
                $query->orWhere('emailPassageiro','LIKE',"%{$search}%");
            }else if($status == "Sem Cadastro"){
                $query->where('password', '=', null);
            }
            else if($status == 'Cadastrados'){
                $query->where('password', '!=', null);
            }else{  

            }
        })
                 
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
    public function getSuporte($id)
    {
        return $this->model
                ->select('acaos.id')
                ->selectRaw('COUNT(suportes.id) as totalSuporte')
                ->join('acaos', 'acaos.passageiro_id', 'passageiros.id')
                ->join('suportes', 'suportes.acao_id', 'acaos.id')
                ->groupBy('acaos.id')
                ->where('passageiro_id', "$id")
                ->get();
    }
    public function allHome(){
        
      $total = array();
      $total['semCadastro'] = $this->model
                            ->where('password', '=', null)            
                            ->count();
      $total['comCadastro'] = $this->model
                            ->where('password', '!=', null) 
                            ->count();
                            
        return $total;            
    }
}