<?php  

namespace App\Repositories\Eloquent;

use App\Models\Carro;
use App\Models\Catraca;
use App\Models\Linha;
use App\Repositories\Contracts\LinhasRepositoryInterface;
use App\Services\DataServices;

class LinhasRepository extends AbstractRepository implements LinhasRepositoryInterface
{
    protected $model = Linha::class;
    public function __construct(){
        $this->model = app($this->model);
    }
    public function getLinhasWithCarrosAndConsumos($status, $search)
    {
        if($status == null){
            $status = 'Ativa';
        }
        $linhas = $this->model
        ->select('linhas.id','numLinha', 'nomeLinha')
        ->selectRaw('COUNT(carros.id) as qtdCarros')
        ->join('carros', 'linhas.id', '=', 'carros.linha_id')
        ->groupBy('id', 'numLinha', 'nomeLinha')
            ->where(function($query) use ($search, $status){
                if($search !=null){
                    $query->where('nomeLinha','LIKE',"%{$search}%");
                    $query->orWhere('numLinha','LIKE',"%{$search}%");
                }else{
                $query->where('statusLinha', '=', $status);
                }
            })
            // ->orderBy('linhas.created_at', 'desc')
            ->paginate(15);

        $consumos = $this->model
                ->select('linhas.id')
                ->selectRaw('COUNT(consumos.id) as qtdConsumos')
                ->join('carros', 'linhas.id', '=', 'carros.linha_id')
                ->join('consumos', 'carros.id', 'consumos.carro_id')
                ->groupBy('linhas.id')
                    ->where(function($query) use ($search, $status){
                        if($search == null){
                            $query->where('statusLinha', $status);
                        }else{
                            $query->where('nomeLinha','LIKE',"%{$search}%");
                            $query->orWhere('numLinha','LIKE',"%{$search}%");
                        }
                    })
                    // ->orderBy('linhas.created_at', 'desc')
                    ->paginate(15);
        $linhas = DataServices::resolveConsumos($linhas, $consumos);
        return $linhas;
    }
    public function updateStatusLinhaCarroCatraca($id, $status)
    {
        $carro = new Carro();
        $catraca = new Catraca();
        if($status == "Inativa"){
            $statusCarro = "Inativo";
        }else{
            $statusCarro = "Ativo";
        }
        $linha = $this->model->find($id);
        $linha->update([
            'statusLinha' => $status
        ]);
        $carro
            ->where('linha_id', "$id")
            ->update([
                'statusCarro' => $statusCarro
                    ]);
        $carros = $carro
            ->where('linha_id', "$id")
            ->get();

        foreach($carros as $carro){
                $catraca
                    ->where('id', "$carro->catraca_id")
                    ->update([
                        'statusCatraca' => $status
                    ]);
            }
    }
    public function createWithCatracaCarro($data)
    {
        $linha = $this->create($data);
        Catraca::
            factory($data['qtdCarroLinha'])
                ->has(Carro::factory(1)
                ->for($linha)
                )
                ->create();
    }
    public function findWithCarros($id)
    {
        
        $linha = $this->model 
                    ->with('carros')
                    ->where('linhas.id', $id)
                    ->get();
        return $linha;
        
        
    
    }
    public function allHome(){
        $consumos = $this->model
                ->select('linhas.numLinha')
                ->selectRaw('COUNT(consumos.id) as qtdConsumos')
                ->join('carros', 'linhas.id', '=', 'carros.linha_id')
                ->join('consumos', 'carros.id', 'consumos.carro_id')
                ->groupBy('linhas.numLinha')
                ->orderBy('qtdConsumos', 'desc')
                ->take(5)
                ->get();
        return $consumos;
    }

    public function search(String | null $search = null){
        $linhas1 = $this->model
        ->select('linhas.id','numLinha', 'nomeLinha')
        ->selectRaw('COUNT(carros.id) as qtdCarros')
        ->join('carros', 'linhas.id', '=', 'carros.linha_id')
        ->groupBy('id', 'numLinha', 'nomeLinha')
        ->
        where('nomeLinha','LIKE',"%{$search}%")
        // ->orderBy('linhas.created_at', 'desc')
            ->paginate(15);
        
        $consumos = $this->model
                ->select('linhas.id')
                ->selectRaw('COUNT(consumos.id) as qtdConsumos')
                ->join('carros', 'linhas.id', '=', 'carros.linha_id')
                ->join('consumos', 'carros.id', 'consumos.carro_id')
                ->groupBy('linhas.id')
                ->
                where('nomeLinha','LIKE',"%{$search}%")
                // ->orderBy('linhas.created_at', 'desc')
                    ->paginate(15);
                    
        $linhas = DataServices::resolveConsumos($linhas1, $consumos);
        return $linhas; 
        
        
    }
} 

