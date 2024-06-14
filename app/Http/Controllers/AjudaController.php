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
        $ajudas = $this->model->allWithCategoria('Ativo');
        $votos = $this->model->countVotosAjuda();

        // dd($votos);
        
        foreach ($ajudas as $ajuda) {
            $ajuda->porcentagem = 0;
            foreach ($votos->items() as $item) {
                if ($item->id == $ajuda->id) { 
                    if ($item->votos != 0) {
                        $ajuda->porcentagem = $item->porcentagemAprovacao;
                    }
                    
                }
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

    public function show($id) {
        $ajuda = $this->model->findById($id);
        $caminhoAjuda = explode('->', $ajuda->caminhoAjuda);
        $ajuda->caminhoAjuda1 = $caminhoAjuda[0] ?? '';
        $ajuda->caminhoAjuda2 = $caminhoAjuda[1] ?? '';
        $ajuda->caminhoAjuda3 = $caminhoAjuda[2] ?? '';
        $categoriaAjudaController = new CategoriaAjudaController;
        $categoriaAjuda = $categoriaAjudaController->index();
        $user = Auth::guard('adm')->user();
        return view('ajuda.show', compact('user', 'ajuda', 'categoriaAjuda'));
    }

    public function store(Request $request){
        
        $data = $request->all();
        $data['caminhoAjuda'] = $data['caminhoAjuda'].'->'. $data['caminhoAjuda2'].'->' . $data['caminhoAjuda3'];
        unset($data['caminhoAjuda2']);
        unset($data['caminhoAjuda3']);
        $data ['statusAjuda'] = 'Ativo';
        $this->model->create($data);
        Auth::guard('adm')->user();
        return $data;
            
    }

    public function edit($id){
        $ajuda = $this->model->findById($id);
        $user = Auth::guard('adm')->user();
        return view('ajuda.show', compact('ajuda'));
    }
public function update($id, Request $request){
    // $ajuda = $this->model->findById($id);
    $data = $request->all();
    $data['caminhoAjuda'] = $data['caminhoAjuda'].'->'. $data['caminhoAjuda2'].'->' . $data['caminhoAjuda3'];
        unset($data['caminhoAjuda2']);
        unset($data['caminhoAjuda3']);
    $this->model->update($id, $data);
    Auth::guard('adm')->user();

    return redirect()->back();

}
public function updateStatus($id, Request $request){
    // $ajuda = $this->model->findById($id);
    $data['statusAjuda'] = $request->statusAjuda;
    $this->model->update($id, $data);
    Auth::guard('adm')->user();

    return redirect()->back();

}

    public function getStatus(Request $request){
        $statusAjuda = $request->input('statusAjuda');
        $ajudas = $this->model->allWithCategoria($statusAjuda);
        $votos = $this->model->countVotosAjuda();

        // dd($votos);
        
        foreach ($ajudas as $ajuda) {
            $ajuda->porcentagem = 0;
            foreach ($votos->items() as $item) {
                if ($item->id == $ajuda->id) { 
                    if ($item->votos != 0) {
                        $ajuda->porcentagem = $item->porcentagemAprovacao;
                    }
                    
                }
            }
        }
       
        return view('ajuda.partials.ajuda_result', compact('ajudas'))->render();
    }
}
