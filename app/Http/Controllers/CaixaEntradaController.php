<?php

namespace App\Http\Controllers;


use App\Models\Passageiro;
use App\Models\Suporte;
use App\Repositories\Contracts\SuporteRepositoryInterface;
use App\Services\AdmServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CaixaEntradaController extends Controller
{
    protected $model;

    public function __construct(SuporteRepositoryInterface $suporte)
    {
        $this -> model = $suporte;
    }
    public function caixaIndex(Suporte $suporte, Request $request) {

        $datas = $this->model->all($request->statusSuporte, $request->search);
        
        $formatar='';

        foreach($datas as $data)
        {
            $formatar = explode(' ', $data->data);
            $formatar = explode('-', $formatar[0]);
            $data->data = $formatar[2]."/".$formatar[1]."/".$formatar[0];
        }
        
        $user = Auth::guard('adm')->user();
    
             
        return view('caixaEntrada.index', compact('datas', 'user'));

    }
    public function show($id, Suporte $suporte)
    {

        $infos = $this->model->findWithPassageiro($id);

        $formatar='';
       
        $data = $infos[0];
                $formatar = explode(' ', $data->dataAcao);
                $formatar = explode('-', $formatar[0]);
                $data->dataAcao = $formatar[2]."/".$formatar[1]."/".$formatar[0];
        $data['id'] = $id;

        $user = Auth::guard('adm')->user();
        return view('caixaEntrada.show', compact('data', 'user'));

    }

    public function update( $id, Request $request)
    {
        
        $this->model->updateStatus($id, $request->statusSuporte);
        return redirect()->back();

    }
    public function sendMail($id, $idSuporte, Passageiro $passageiro, Request $request, AdmServices $admServices)
    {
        
        $passageiro = $passageiro->find($id);
        $mensagem = $request->mensagem;
        $suporte = $this->model->findById($idSuporte);
        
        if(!isset($request->statusSuporte)) {
            $request['statusSuporte'] = 'Aberto';
        }
        

        $admServices->emailSuporte($passageiro->emailPassageiro, $mensagem, $idSuporte, $passageiro->nomePassageiro, $suporte->descSuporte, $suporte->categoriaSuporte);

        $this->model->updateStatus($idSuporte, $request->statusSuporte);
        
        return redirect()->back();

    }
    public function search(Request $request)
    {
        $datas = $this->model->all($request->statusSuporte,$request->search);
        if($datas->count() >= 1){
            foreach($datas as $data)
            {
                $formatar = explode(' ', $data->data);
                $formatar = explode('-', $formatar[0]);
                $data->data = $formatar[2]."/".$formatar[1]."/".$formatar[0];
            }
            return view('caixaEntrada.partials.caixaEntrada_result', compact('datas'))->render();
        }else{
            return view('components.no_results')->with('palavra', $request->search)->render();
        }
    }
}
