@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/perfilPassageiro.css') }}" type="text/css">
@endpush

@section('pageTitle', 'Perfil do Passageiro')

@section('title','Perfil do Passageiro')

@section('content')
<div class="w-100 h-100  d-flex flex-row">
    <div class="infosPassageiro h-100" style="width:70%">
        <div class="primeirasInfo ml-5  d-flex flex-column justify-content-center align-items-center w-50 h-50 d-flex flex-row">
            <div class="fotoPassageiro" style="height:50%; border: 2px solid gray; border-radius:8%"  >
                <img src="{{ url("storage/$passageiro->fotoPassageiro") }}" class="w-100 h-100" style="border-radius: 8%" alt="">
                
            </div>
            <div class="dadosPrincipais d-flex flex-column ph-4">
                <div class="flex-row d-flex gap-2 justify-content-center"><p style="color:rgb(52, 49, 49);" class="fw-bold p-0 m-0">{{ $passageiro->nomePassageiro }}</p></div>
                <div class="flex-row d-flex gap-2 justify-content-center"><p  style="font-size: 12px" class="fw-bold text-secondary  p-0 m-0 mb-3 text-center">{{ $passageiro->cpfPassageiro }}</p></div>
                <div class="d-flex flex-row justify-content-center align-items-center w-100 gap-3">
                    <div class="d-flex gap-2"><strong class="fs-5">Total de recargas:</strong><p class="fw-bold fs-5">2</p>
                    </div>
                    <button class="p-0 mb-3 border-0 "><i class="fa-regular fa-pen-to-square fa-xl p-0 m-0"></i></button>
                </div>
            </div>
        </div>

        <div class="grafico w-100 h-50 align-items-center justify-content-center d-flex ">
            <div class="rounded-3" style="height: 85%;width:65%;border: 2px solid red">
                <p>grafico</p>
        
            </div>
        </div>
    </div>

    <div class="historicoRecarga h-100 py-5" style="background-color: red;width:30%;border-top-left-radius: 80px 80px;" >
      <div class="todasInfo w-100 h-100 d-flex align-items-center flex-column text-white">
        <div class="titulo d-flex justify-content-center w-100 flex-row">   
            
            <h5 class="fw-bold text-white p-3 text-center">HISTÓRICO DE RECARGAS</h5>
            <button class="border-0 btn"><i class="fas fa-plus-circle fa-2x text-white mb-2" aria-hidden="true"></i></a></button>
        </div>
        <table style="width: 90%">
            <tr class="" style="border-bottom:1.5px solid white">
                <th class="text-center py-3" style="width:35%">Cartão</th>
                <th class="text-center" style="width:30%">Quantidade</th>
                <th class="text-center" style="width: 35%">Data</th>
            </tr>
            <tr>
                <td class="text-center py-3" style="width:35%">Bilhete unico comum</td>
                <td class="text-center" style="width:30%">15</td>
                <td class="text-center" style="width: 35%">25/10/2023</td>
            </tr>
        </table>
      </div>
    </div>
</div>


@endsection
