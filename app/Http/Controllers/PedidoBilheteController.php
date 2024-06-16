<?php

namespace App\Http\Controllers;

use App\Models\Bilhete;
use App\Models\Passageiro;
use App\Models\PedidoBilhete;
use App\Repositories\Contracts\PedidoBilheteRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Contracts\PassageiroRepositoryInterface;
use App\Services\DataServices;

class PedidoBilheteController extends Controller
{
    protected $model;
    public function __construct(PedidoBilheteRepositoryInterface $pedidoBilheteRepositoryInterface)
    {
        $this -> model = $pedidoBilheteRepositoryInterface;
    }
        
    public function index(Request $request){
        $pedidoBilhetes = $this->model->getAllpedidos();
        $user = Auth::guard('adm')->user();
        return view("pedidoBilhete.index",compact('pedidoBilhetes','user'));
    }
  
    public function search(Request $request){
        $search = $request->input('search');
        if($request->status){
            $status = $request->status;
        }else{
            $status = "Aberto";
        }
        $pedidoBilhetes = $this->model->search($search, $status);
        $user = Auth::guard('adm')->user();

        if ($pedidoBilhetes->count() >= 1) {
            $view = view('pedidoBilhete.partials.pedidobilhetes_result', compact('pedidoBilhetes', 'user'))->render();
            return response()->json(['html' => $view]);
        } else {
            $view = view('components.no_results')->with('palavra', $request->search)->render();
           return response()->json(['html' => $view]);
        }
    }

    public function show($id) {
        $user = Auth::guard('adm')->user();
        $data =$this->model->findWithPassageiro($id);
        $data = $data[0];
        $trataData = explode("-",$data->nasc);
        $trataData = $trataData[2]."/".$trataData[1]."/".$trataData[0];
        $data->nasc = $trataData;
        
        $podeAteFalarDeMim = explode(" ", $data->data)[0];
        $podeAteFalarDeMim = explode("-",$podeAteFalarDeMim);
        $podeAteFalarDeMim = $podeAteFalarDeMim[2]."/".$podeAteFalarDeMim[1]."/".$podeAteFalarDeMim[0];
        $data->data = $podeAteFalarDeMim;
        
        return response()->json($data);
    }
    public function responder(Request $request, $idPedido)
    {
        $data = [
            'statusPedido' => $request->status
        ];
        $pedido = $this->model->update($idPedido, $data);
        // if($request->status == "Aprovado")
        // {
        //     switch($pedido->tipoBilhete){
        //         case "PCD":
        //             $gratuidade = 1;
        //             $meiaGratuidade = 1;
        //             break;
        //         case "Estudante Ins. Privada":
        //             $gratuidade = 0;
        //             $meiaGratuidade = 1;
        //             break;
        //         case "Estudante":
        //             $gratuidade = 1;
        //             $meiaGratuidade = 1;
        //             break;
        //         default:
        //             $gratuidade =0;
        //             $meiaGratuidade = 0;
        //     }
        //     $bilhete = Bilhete::create([
        //         'qrCodeBilhete' => 'Pendente',
        //         'numBilhete' =>  fake()->numerify('### ### ###'),
        //         'tipoBilhete' => $pedido->tipoBilhete,
        //         'gratuidadeBilhete' => $gratuidade,
        //         'meiaPassagensBilhete' => $meiaGratuidade,
        //         'statusBilhete' => 'Ativo',
        //         'passageiro_id' => $pedido->passageiro_id,
        //     ]);
        //     $bilhete->update([
        //         'qrCodeBilhete' => DataServices::qrCodeFetch($bilhete->id)
        //     ]);
        
        
    }
}
