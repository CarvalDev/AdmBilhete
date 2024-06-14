@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/caixaEntrada.css') }}" type="text/css">
@endpush

@section('title', 'Caixa de Entrada')

@section('content')
<div class="tabela w-100 h-100">
    <div id="table-content">
    <table class=" mx-auto mt-4 text-center" style="width:98%" id="tabela">
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
            <th class="py-2" style="width: 25%">Email Passageiro</th>
            <th class="py-2" style="width: 10%">Data</th>
            <th  class="py-2" style="width: 20%;">Status</th>
            <th class="py-2" style="width: 20%">Tema da Dúvida</th>
            <th class="text-center py-2" style="width: 15%">Visualizar Mensagem</th>
            
           
        </tr>
        @if ($datas)
           @foreach ($datas as $data)
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid ">
               
               <td class="py-2 fw-bold">{{ $data->email }}</td>
               <td class="py-2 fw-bold">{{ $data->data }}</td>
               <td  class="text-center px-2 fw-bold">{{ $data->status }}</td>
               <td class="py-2 fw-bold">{{ $data->tema }}</td>
               <td class="px-2 fw-bold ">  <a href="{{ route('caixaEntrada.show', $data->idSuporte) }}" class="text-dark mt-2 " >
                
                @if ($data->tema == 'Bilhetes')
                <i class='fs-4 bx bxs-credit-card'></i>
                @elseif($data->tema == 'Uso')
                <i class='fs-4 bx bxs-hand-up'></i>
                @elseif($data->tema == 'Falhas')
                <i class='fs-4 bx bxs-message-rounded-x'></i>
                @else
                <i class='fs-4 bx bxs-shopping-bag' ></i>
                @endif
            </a></td>
        </tr>
               @endforeach
                    
            @else
            <tr style="border-bottom:1.5px solid red">
               <td>Não há pedidos de suporte</td>
            </tr>
            @endif
            
        

    </table>
    <div class="p-3">
    {{ $datas->links() }}
    </div>
</div>
</div>   
@include('caixaEntrada.ajax.caixaEntrada')
@endsection

@include('components.modal')
<script src="{{ URL::asset('js/modal.js') }}"></script>

@section('pageTitle','Caixa de Entrada')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection