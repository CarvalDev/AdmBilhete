@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/ajuda.css') }}">
@endpush

@section('title', 'Ajuda')

@section('content')

<div class="tabela w-100 h-100">
    <div id="table-content">
    <table class=" mx-auto mt-4 text-center" style="width:98%" id="tabela">
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
       
            
            <th class="py-2" style="width: 30%">Título</th>
            <th class="py-2" style="width: 10%">Categoria</th>
            <th  class="py-2" style="width: 15%;">Status</th>
            <th class="py-2" style="width: 20%">Aprovação</th>
            <th class="text-center py-2" style="width: 15%">Editar Guia</th>
          
                
            
           
        </tr>
        @foreach ($ajudas as $ajuda)
    <tr class="text-center" style="border-bottom: rgba(1, 1, 1, 0.1) 1px solid">
        <td class="py-2 fw-bold" style="font-size: 14px">
            {{ strpos($ajuda->titulo, '?') !== false ? $ajuda->titulo : $ajuda->titulo . '?' }}
        </td>
        <td class="py-2 fw-bold">{{ $ajuda->categoria }}</td>
        <td class="text-center py-2 fw-bold">{{ $ajuda->status }}</td>
        <td class="text-center py-2 d-flex justify-content-center align-items-center fw-bold h-100">
            <div id="aprovacaoBar">
                <div class="h-100 {{ $ajuda->porcentagem == 0 ? 'bg-white' : 'bg-dark' }} d-flex justify-content-center align-items-center" style="width: {{ $ajuda->porcentagem == 0 ? '100%' : $ajuda->porcentagem.'%' }}">
                    <span class="{{ $ajuda->porcentagem != 0 ? 'text-white' : 'text-dark' }} d-flex justify-content-center align-items-center" style="font-size: 12px">{{ $ajuda->porcentagem }}%</span>
                </div>
            </div>
        </td>
        <td class="px-2 fw-bold"> 
            <a href="{{ route('ajuda.show', $ajuda->id) }}" class="text-dark mt-2">
                <i class="fs-4 bx bxs-hand-up"></i>
            </a>
        </td>
    </tr>
@endforeach

            <!-- <tr style="border-bottom:1.5px solid red">
               <td>Não há pedidos de suporte</td>
            </tr> -->
            
            
        

    </table>
    <div class="p-3">
        {{ $ajudas->links() }}
    </div>
</div>
</div>   


@endsection


@section('pageTitle', 'Lista de Guias')

@section('pesquisa')
@include('components.barraPesquisa')
@endsection