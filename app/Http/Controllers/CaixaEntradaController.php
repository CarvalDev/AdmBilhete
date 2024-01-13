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
    public function caixaIndex(Suporte $suporte) {
        $suportes = $suporte
                    ->select('suportes.id as idSuporte','emailPassageiro as email', 'descSuporte as desc', 'dataAcao as data', 'categoriaSuporte as tema' )
                    ->join('acaos', 'suportes.acao_id', 'acaos.id')
                    ->join('passageiros', 'acaos.passageiro_id', 'passageiros.id')
                    ->get();

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
        return view('caixaEntrada.show', compact('data'));
    }
    public function sendMail($id, Passageiro $passageiro, Request $request){
        $passageiro = $passageiro->find($id);
        $mensagem = $request->mensagem;
        Mail::to($passageiro->emailPassageiro)
        ->send(new RespostaSuporteMail($mensagem));
        return redirect()->route('caixaEntrada.index');
    }
}
