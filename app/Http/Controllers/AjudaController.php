<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\AdmRepositoryInterface;
use App\Repositories\Contracts\AjudaRepositoryInterface;
use App\Services\AdmServices;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoriaAjudaController;



class AjudaController extends Controller
{
    protected $model;
    protected $services;
    
    public function __construct(AjudaRepositoryInterface $ajuda, AdmServices $services)
    {
        $this->model = $ajuda;
        $this->services = $services;
    } 
 
    public function index(){
        $ajudas = $this->model->allWithCategoria();
        $votos = $this->model->countVotosAjuda();
        for($i=0;$i<count($ajudas);$i++){
            if($ajudas[$i]->id == $votos[$i]->id){
                $ajudas[$i]['porcentagem'] = $votos[$i]->porcentagemAprovacao;
            }else{
                $ajudas[$i]['porcentagem'] = 0;
            }
        }
        

        $user = Auth::guard('adm')->user();
        return view('ajuda.index', compact('ajudas',  'user'));
    }

    public function form(){
        $categoriaAjudaController = new CategoriaAjudaController;
        $categoriaAjuda = $categoriaAjudaController->index();
        $user = Auth::guard('adm')->user();
        return view('ajuda.form', compact('user', 'categoriaAjuda'));
    } 

    public function show() {
        $user = Auth::guard('adm')->user();
        return view('ajuda.show', compact('user'));
    }

    public function store(Request $request){
        
        $data = $request->all();
        $data['caminhoAjuda'] = $data['caminhoAjuda'].'->'. $data['caminhoAjuda2'].'->' . $data['caminhoAjuda3'];
        unset($data['caminhoAjuda2']);
        unset($data['caminhoAjuda3']);
        $data ['statusAjuda'] = 'ativo';
        $this->model->create($data);
        Auth::guard('adm')->user();
        return $data;
            
    }
}
