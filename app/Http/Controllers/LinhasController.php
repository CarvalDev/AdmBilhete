<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreUpdateLinhasFormRequest;
use App\Repositories\Contracts\CarroRepositoryInterface;
use App\Repositories\Contracts\CatracaRepositoryInterface;
use App\Repositories\Contracts\ConsumoRepositoryInterface;
use App\Repositories\Contracts\LinhasRepositoryInterface;
use App\Services\DataServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LinhasController extends Controller
{  
    protected $model;
    public function __construct(LinhasRepositoryInterface $linha)
    {
        $this -> model = $linha;
    }
         
    public function index(Request $request)
    {
    
        $linhas = $this->model->getLinhasWithCarrosAndConsumos($request->statusLinha, $request->search);
    
        $user = Auth::guard('adm')->user();

        return view('linhas.index', compact('linhas', 'user'));
    }

    public function register(){
        $user = Auth::guard('adm')->user();
        return view('linhas.register', compact('user'));
    }

    public function update($id, Request $request)
    {

        $this->model->update($id, $request->all());
        return redirect()->route('linhas.show', $id);  

    }
    public function updateStatus($id, Request $request){
        
        $this->model->updateStatusLinhaCarroCatraca($id, $request->statusLinha);
       
        return redirect()->back();
    }
    public function store(StoreUpdateLinhasFormRequest $request){
        $data = $request->all();
        $data['statusLinha'] = "Ativa";
        
        $this->model->createWithCatracaCarro($data);
        // return redirect()->route('linhas.index');
    }

    public function search(Request $request)
    {
        $linhas = $this->model->getLinhasWithCarrosAndConsumos($request->statusLinha,$request->search);
        
        if($linhas->count() >= 1){
            return view('linhas.partials.linhas_result', compact('linhas'))->render();
        }else{
            return view('components.no_results')->with('palavra', $request->search)->render();
        }
    }

    public function show($id,   ConsumoRepositoryInterface $consumoModel){
       
        $query = $this->model->findWithCarros($id);
        
        $carros = $query[0]->carros;
        $linha = $query[0];
        $consumos = $consumoModel->countConsumosByCars($id);
        $totalConsumos = $consumoModel->countConsumosByLinha($id);
        $linha->totalConsumos = $totalConsumos[0]->qtdConsumos;
         
        
        $carros = DataServices::resolveConsumos($carros, $consumos);
        
        $user = Auth::guard('adm')->user();

        return view('linhas.show', compact('linha', 'carros', 'user'));
    }

    public static function updateStatusCarro(Request $request, CarroRepositoryInterface $carroModel, CatracaRepositoryInterface $catracaModel)
    {
       
        $data['statusCarro'] = $request->statusCarro;

        $carroModel->update($request->idCarro, $data);
     
        $carro = $carroModel->findById($request->idCarro);
        
        if($request->statusCarro == "Ativo"){
            $statusCatraca = "Ativa";
        }else{
            $statusCatraca = "Inativa";
        }

        $id = $carro->catraca_id;

        $dataCatraca['statusCatraca'] = $statusCatraca;

        $catracaModel->update($id, $dataCatraca);
            
        
        return redirect()->back();
    }

    public function storeCarro(Request $request, $idLinha, CatracaRepositoryInterface $catracaModel){
        $linha = $this->model->findById($idLinha);
        
        
        $catracaModel->factory($linha, $request->qtdCarro);
        return redirect()->back();
    }
}
