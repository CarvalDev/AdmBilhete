@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/catracas.css') }}" type="text/css">
@endpush

@section('title','Carros')

@section('content')
<div class="tabela w-100 h-100">
    <div class="d-flex justify-content-end align-items-center container">    
        <button class="border-0"><i class="fas fa-plus-circle fa-2x" aria-hidden="true"></i></a></button>
    </div>

    @if (isset($carros) && count($carros)>0)
    <table class="w-100 mt-3">
        <tr class="" style="border-bottom:1.5px solid red">
            <th class="p-2 text-center" style="width: 5%;">Nº Carro</th>
            <th class="px-2 text-center" style="width: 20%">NºLinha</th>
            <th class="px-2 text-center" style="width: 20%">Linha</th>
            <th class="px-2 text-center" style="width: 20%">Id Catraca</th>
            <th class="px-2   text-center" style="width: 10%">    <label>Alterar</label></th>
            <th class="px-2 text-center" style="width: 10%">    <label>Exluir</label></th>
        </tr>
        @foreach ($carros as $carro)
        <tr style="border-bottom:1.5px solid red">
            <td class="px-2 text-center fw-bold">{{$carro->numCarro}}</td>
            <td class="px-2 text-center fw-bold">{{$carro->numLinha}}</td>
            <td class="px-2 text-center fw-bold">{{$carro->nomeLinha}}</td>
            <td class="px-2 text-center fw-bold">{{$carro->catraca_id}}</td>
            <td id="btn-modal" class=" px-2 text-center fw-bold" id="alterar"><button id="" class="btn" onclick="modPerfil()"><i class="fa-regular fa-pen-to-square fa-xl "></i></button></td>
            <td class="px-2 text-center fw-bold"><a href="" class="btn" style=""><i class="fa-regular fa-trash-can fa-xl"></i></a></td>
        </tr>
        @endforeach

    </table>
    @else
    <div class="w-100 h-50 d-flex justify-content-center align-items-center ">
        <span class="fs-3">Não há catracas para exibir</span>
    </div>
    @endif
</div>
@endsection

@include('components.modalCatracas')
<script src="{{ URL::asset('js/modalCatraca.js') }}"></script>

@section('pageTitle','Carros')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection