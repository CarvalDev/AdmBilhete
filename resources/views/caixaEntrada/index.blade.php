@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/caixaEntrada.css') }}" type="text/css">
@endpush

@section('title', 'Caixa de Entrada')

@section('content')
<div class="tabela w-100 h-100">
    <table class="w-100 mt-3">
        <tr class="" style="border-bottom:2px solid red">
            <th class="p-2" style="width: 5%;">ID</th>
            <th class="px-2" style="width: 20%">Nome</th>
            <th class="px-2" style="width: 20%">Email</th>
            <th class="px-2" style="width: 20%">Cpf</th>
            <th class="px-2" style="width: 20%">Tema da Dúvida</th>
            <th class="text-center" style="width: 15%">Mensagem</th>
        </tr>
        <tr style="border-bottom:1.5px solid red">
            <td class="px-2 fw-bold ">01</td>
            <td class="px-2 fw-bold">Marcelinho Carioca</td>
            <td class="px-2 fw-bold">talarico@gmail.com</td>
            <td class="px-2 fw-bold">908.098.908-00</td>
            <td class="px-2 fw-bold">Bilhete</td>
            <td class="justify-content-center align-items-center d-flex  py-2">  <button id="btn-modal" class="btn" onclick="modPerfil()"><i class="fa-regular fa-pen-to-square fa-xl "></i></button></td>
        </tr>

    </table>
</div>   
@endsection

@include('components.modal')
<script src="{{ URL::asset('js/modal.js') }}"></script>

@section('pageTitle','Caixa de Entrada')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection