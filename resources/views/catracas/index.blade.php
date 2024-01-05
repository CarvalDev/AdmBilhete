@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/catracas.css') }}" type="text/css">
@endpush

@section('title','Catracas')

@section('content')
<div class="tabela w-100 h-100">
    <div class="d-flex justify-content-end align-items-center container">    
        <button class="border-0"><i class="fas fa-plus-circle fa-2x" aria-hidden="true"></i></a></button>
    </div>

    @if (isset($catracas) && count($catracas)>0)
    <table class="w-100 mt-3">
        <tr class="" style="border-bottom:1.5px solid red">
            <th class="p-2 text-center" style="width: 5%;">ID</th>
            <th class="px-2 text-center" style="width: 20%">NºLinha</th>
            <th class="px-2 text-center" style="width: 40%">Linha</th>
            <th class=" justify-content-evenly  w-100 gap-5 align-items-center mt-1 d-flex" style="width: 35%"><label>Alterar</label> <label>Excluir</label></th>
        </tr>
        @foreach ($catracas as $catraca)
        <tr style="border-bottom:1.5px solid red">
            <td class="px-2 text-center fw-bold">{{$catraca->id}}</td>
            <td class="px-2 text-center fw-bold">312-N</td>
            <td class="px-2 text-center fw-bold">{{$catraca->linhaCatraca}}</td>
            <td id="btn-modal" class=" py-2  justify-content-evenly gap-5 d-flex flex-row" id="alterar"><button id="" class="btn" onclick="modPerfil()"><i class="fa-regular fa-pen-to-square fa-xl "></i></button>
            <a href="" class="btn" style=""><i class="fa-regular fa-trash-can fa-xl"></i></a></td>
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

@section('pageTitle','Catracas')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection