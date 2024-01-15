<?php

namespace App\Http\Controllers;

use App\Mail\RespostaSuporteMail;
use App\Models\Acao;
use App\Models\Passageiro;
use App\Models\Suporte;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CaixaEntradaController extends Controller
{
    protected $model;
    public function __construct(Suporte $suporte)
    {
        $this -> model = $suporte;
    }
    public function caixaIndex(Suporte $suporte, Request $request) {

        if(!isset($request->statusSuporte)){
            $status = 'Aberto';
        }else{
            $status = $request->statusSuporte;
        }

        
        if(isset($request->search)){
                    $suportes = $this->model
                    ->getSuportes(
                     search: $request->search ?? '',
                     
                     
                         );
        }else{
            $suportes = $suporte
                    ->select('suportes.id as idSuporte','emailPassageiro as email', 'descSuporte as desc', 'dataAcao as data', 'categoriaSuporte as tema', 'statusSuporte as status' )
                    ->join('acaos', 'suportes.acao_id', 'acaos.id')
                    ->join('passageiros', 'acaos.passageiro_id', 'passageiros.id')
                    ->where('statusSuporte', "$status")
                    ->get();
        }

        $datas = $suportes;
        
        $formatar='';
        foreach($datas as $data){
            $formatar = explode(' ', $data->data);
            $formatar = explode('-', $formatar[0]);
            $data->data = $formatar[2]."/".$formatar[1]."/".$formatar[0];
        }
        
        
    
             
        return view('caixaEntrada.index', compact('datas'));
    }
    public function show($id, Suporte $suporte){
        $infos = $suporte
                    ->join('acaos', 'suportes.acao_id', 'acaos.id')
                    ->join('passageiros', 'acaos.passageiro_id', 'passageiros.id')
                    ->where('suportes.id', '=', "$id")
                    ->get();
        $formatar='';
       
        
        $data = $infos[0];
                        $formatar = explode(' ', $data->dataAcao);
                        $formatar = explode('-', $formatar[0]);
                        $data->dataAcao = $formatar[2]."/".$formatar[1]."/".$formatar[0];
        $data['id'] = $id;

        
        return view('caixaEntrada.show', compact('data'));
    }

    public function update( $id, Request $request){
        
        $suporte = Suporte::find($id);
        $suporte->update([
            'statusSuporte' => $request->statusSuporte
        ]);
        return redirect()->back();
    }
    public function sendMail($id, $idSuporte, Passageiro $passageiro, Request $request){
        
        $passageiro = $passageiro->find($id);
        $mensagem = $request->mensagem;
        $suporte = Suporte::find($idSuporte);

        Mail::to($passageiro->emailPassageiro)
        ->send(new RespostaSuporteMail($mensagem, $idSuporte, $passageiro->nomePassageiro,$suporte->descSuporte, $suporte->categoriaSuporte));
        return $this->update($idSuporte, $request);
    }
}
