@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/catracas.css') }}" type="text/css">
@endpush

@section('title','Linhas')

@section('content')
@include('linhas.partials.modal_adicionar')
<div class="mt-2 tabela w-100 h-100">
    <div class="d-flex justify-content-end align-items-center container">    
        <a onclick="acionaModal()" class="border-0"><i class="fas fa-plus-circle fa-2x text-dark" aria-hidden="true"></i></a>
    </div>
    
    @if (isset($linhas))
    <div id="table-content">
    <table class="mx-auto mt-3" style="width: 95%" id="tabela">
        <tr class="" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
            <th class="py-2 text-center" style="width: 20%;">Nº Linha</th>
            <th class="py-2 text-center" style="width: 20%">Nome Linha</th>
            <th class="py-2 text-center" style="width: 20%">Qtd Carros</th>
            <th class="py-2 text-center" style="width: 20%">Qtd Consumos</th>
            <th class="py-2   text-center" style="width: 10%"><label>Visualizar</label></th>
            
        </tr>
        @foreach ($linhas as $linha)
        
        <tr style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
            <td class="py-2 text-center fw-bold">{{$linha->numLinha}}</td>
            <td class="py-2 text-center fw-bold">{{$linha->nomeLinha}}</td>
            <td class="py-2 text-center fw-bold">{{$linha->qtdCarros}}</td>
            <td class="py-2 text-center fw-bold">{{$linha->qtdConsumos }}</td>
            <td id="btn-modal" class="  text-center fw-bold" id="alterar"><a id="" class="text-dark" href="{{ route('linhas.show', $linha->id) }}" class="btn" ><i class="fa-solid fa-info"></i></a></td>
        
            
        </tr>
        @endforeach
        

    </table>
    <div class="p-3">
        {{ $linhas->links() }}
    </div>
</div>
    @else
    <div class="w-100 h-50 d-flex justify-content-center align-items-center ">
        <span class="fs-3">Não há catracas para exibir</span>
    </div>
    @endif
</div>
@include('linhas.ajax.linhas') 
@endsection



@section('pageTitle','Linhas')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection