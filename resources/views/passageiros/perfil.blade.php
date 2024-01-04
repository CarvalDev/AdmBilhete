@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/perfilPassageiro.css') }}" type="text/css">
@endpush

@section('pageTitle', 'Perfil do Passageiro')

@section('title','Perfil do Passageiro')

@section('content')
<div class="w-100 h-100  d-flex flex-row">
    <div class="infosPassageiro h-100" style="width:70%">
        <div class="primeirasInfo d-flex justify-content-center align-items-center w-100 h-50 d-flex flex-row">
            <div class="fotoPassageiro" style="width: 25%;height:80%;border-radius:50%; border: 5px solid rgb(119, 116, 116)" >
                <img src="{{ url('storage/site/pessoa.jpg') }}" class="w-100 h-100" style="border-radius:50%" alt="">
                
            </div>
            <div class="dadosPrincipais d-flex flex-column p-4">
                <div class="flex-row d-flex gap-2"><p style="color:rgb(52, 49, 49);" class="fw-bold">ROBERTO FERREIRA </p></div>
                <div class="flex-row d-flex gap-2"><strong>Cpf:</strong><p style="color: rgb(48, 48, 211);" class="fw-bold">900.777.879-00</p></div>
                <div class="flex-row d-flex gap-2"><strong>Recargas Efetuadas:</strong><p style="color: rgb(48, 48, 211) " class="fw-bold">2</p></div>
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
        <div class="titulo d-flex justify-content-center w-100">
            <h5 class="fw-bold text-white p-3 text-center">HISTÓRICO DE RECARGAS</h5>
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

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection