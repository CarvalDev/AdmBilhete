<?php 

namespace App\Services;

class DataServices
{
    public function resolvePassagens($bilhetes, $passagens)
    {
        for($i=0;$i<$bilhetes->count();$i++){
            $achou =0;
            for($j=0;$j<$passagens->count();$j++){
                if($bilhetes[$i]->id == $passagens[$j]->id ){
                    $bilhetes[$i]->qtdPassagem = $passagens[$j]->passagens;
                    $achou++;
                }
            }
            if($achou==0){
                $bilhetes[$i]->qtdPassagem = 0;
            }
        }
        return $bilhetes;
    }
    public function resolveBeneficios($tipoBilhete, $idPassageiro)
    {
        switch($tipoBilhete){
            case "Estudante":
            $gratuidadeBilhete = true;
            $meiaPassagemBilhete = true;
        break;
            case "Idoso":
            $gratuidadeBilhete = true;
            $meiaPassagemBilhete = true;
        break;
            case "Professor":
            $gratuidadeBilhete = false;
            $meiaPassagemBilhete = true;
        break;
            case "Comum":
            $gratuidadeBilhete = false;
            $meiaPassagemBilhete = false;
        break;
            case "Pcd":
            $gratuidadeBilhete = true;
            $meiaPassagemBilhete = true;
        break;
            case "Obesa":
            $gratuidadeBilhete = false;
            $meiaPassagemBilhete = true;
        break;
            case "Gestante":
            $gratuidadeBilhete = true;
            $meiaPassagemBilhete = true;
        break;
            case "Corporativo":
            $gratuidadeBilhete = false;
            $meiaPassagemBilhete = false;
        }

        $data['qrCodeBilhete'] = 'pendente';
        $data['tipoBilhete'] = $tipoBilhete;
        $data['gratuidadeBilhete'] = $gratuidadeBilhete;
        $data['meiaPassagensBilhete'] = $meiaPassagemBilhete;
        $data['numBilhete'] = fake()->numerify('### ### ###');
        $data['statusBilhete'] = 'Ativo';
        $data['passageiro_id'] = $idPassageiro;
        return $data;
    }
    public static function resolveConsumos($linhas, $consumos)
    {
        for($i=0;$i < $linhas->count(); $i++)
        {
            $achou =0;
            for($j=0;$j < $consumos->count();$j++)
            {
                if($linhas[$i]->id == $consumos[$j]->id)
                {
                    $achou++;
                    $linhas[$i]->qtdConsumos = $consumos[$j]->qtdConsumos;
                }
            }
            if($achou == 0){
                $linhas[$i]->qtdConsumos = 0;
            }
            
        }
        return $linhas;
    }
}