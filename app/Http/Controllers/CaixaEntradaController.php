<?php

namespace App\Http\Controllers;

use App\Models\Acao;
use App\Models\Suporte;
use Illuminate\Http\Request;

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
        
        return view('caixaEntrada.show');
    }
}
