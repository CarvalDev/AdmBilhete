<?php  

namespace App\Repositories\Eloquent;

use App\Models\Consumo;
use App\Repositories\Contracts\ConsumoRepositoryInterface;
use Carbon\Carbon;

class ConsumoRepository extends AbstractRepository implements ConsumoRepositoryInterface
{
    protected $model = Consumo::class;
    public function __construct(){
        $this->model = app($this->model);
    }
    public function countConsumosByCars($idLinha)
    {
        return  $this->model     
            ->select('carros.id as id')   
            ->selectRaw('COUNT(consumos.id) as qtdConsumos')
            ->join('carros', 'consumos.carro_id', 'carros.id')
            ->where('carros.linha_id', '=', $idLinha)
            ->groupBy('carros.id')
            ->get();
    }
    public function countConsumosByLinha($idLinha)
    {
        return $this->model
                        ->selectRaw('COUNT(consumos.id) as qtdConsumos')
                        ->join('carros', 'consumos.carro_id', '=', 'carros.id')
                        ->groupBy('carros.linha_id')
                        ->where('carros.linha_id', $idLinha)
                        ->get();
    }
    public function lastFourDays()
    {
        $consumo = array();
        $ultimaSemana = now()->subWeek()->startOfWeek(); 
        $hoje = now();
        $consumo['total'] = $this->model
                            ->join('acaos', 'consumos.acao_id', 'acaos.id')
                            ->whereBetween('acaos.dataAcao', [$ultimaSemana, $hoje])
                            ->count();
        $day1 = Carbon::now()->subDays(1)->startOfDay();
        $consumo['day1'] = $this->model
                            ->join('acaos', 'consumos.acao_id', 'acaos.id')
                            ->whereBetween('acaos.dataAcao', [$day1, $hoje])
                            ->count();
        $day2 = Carbon::now()->subDays(2)->startOfDay();
        $consumo['day2'] = $this->model
                            ->join('acaos', 'consumos.acao_id', 'acaos.id')
                            ->whereBetween('acaos.dataAcao', [$day2, $day1])
                            ->count();
        $day3 = Carbon::now()->subDays(3)->startOfDay();
        $consumo['day3'] = $this->model
                            ->join('acaos', 'consumos.acao_id', 'acaos.id')
                            ->whereBetween('acaos.dataAcao', [$day3, $day2])
                            ->count();
        $day4 = Carbon::now()->subDays(4)->startOfDay();
        $consumo['day4'] = $this->model
                            ->join('acaos', 'consumos.acao_id', 'acaos.id')
                            ->whereBetween('acaos.dataAcao', [$day4, $day3])
                            ->count();
        return $consumo;
    }
}