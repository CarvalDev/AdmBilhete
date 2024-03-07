<?php 

namespace App\Repositories\Eloquent;

use App\Models\Bilhete;
use App\Models\Passagem;
use App\Repositories\Contracts\BilheteRepositoryInterface;

class BilheteRepository extends AbstractRepository implements BilheteRepositoryInterface
{
    protected $model = Bilhete::class;
    public function __construct()
    {
        $this->model = app($this->model);
    }
    public function removePassagens($qtd, $bilhete)
    {
        $passagem = new Passagem();
        $passagens = $bilhete->passagem()->where('statusPassagem', 'Ativa')->get();
            for($i=0;$i<$qtd;$i++) {
                $passagem->where('id',$passagens[$i]->id)->update([
                    'statusPassagem' => 'Inativa'
                ]);
            }
    }
    public function getPassagensAtivas($idPassageiro)
    {
        return $this->model->
                    select('bilhetes.id')
                    ->selectRaw('COUNT(passagems.id) as passagens')
                    ->join('passagems', 'bilhetes.id', 'passagems.bilhete_id')
                    ->groupBy('bilhetes.id')
                    ->where('passageiro_id', "$idPassageiro")
                    ->where('statusPassagem','Ativa')
                    ->get();
    }
    public function getConsumos($idPassageiro) 
    {

        return $this->model->
            select('bilhetes.id')
            ->selectRaw('COUNT(passagems.id) as passagensConsumidas')
            ->join('passagems', 'bilhetes.id', 'passagems.bilhete_id')
            ->join('consumos', 'consumos.passagem_id', 'passagems.id')
            ->groupBy('bilhetes.id')
            ->where('passageiro_id', "$idPassageiro")
            ->where('statusPassagem', 'Inativa')
            ->get();
        



    }

    public function getAllConsumos($idPassageiro) 
    {

        $consumos = $this->model->
            
            selectRaw('COUNT(passagems.id) as consumosTotais')
            ->join('passagems', 'bilhetes.id', 'passagems.bilhete_id')
            ->join('consumos', 'consumos.passagem_id', 'passagems.id')
            ->where('passageiro_id', "$idPassageiro")
            ->where('statusPassagem', 'Inativa')
            ->get();
        if($consumos->count()>0){
            return $consumos[0]->consumosTotais;
        }else{
            return 0;
        }



    }
    public function adicionarPassagens($qtd, $bilhete)
    {
        for ($i=0;$i<$qtd;$i++) {
            $bilhete->passagem()->create([
                'statusPassagem'=>'Ativa',
                'tempoRestantePassagem' => '02:00:00'
            ]);
        }
    }
    
}