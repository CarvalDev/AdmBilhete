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