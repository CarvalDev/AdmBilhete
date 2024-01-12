@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/caixaEntrada.css') }}" type="text/css">
@endpush

@section('title', 'Caixa de Entrada')

@section('content')
<div class="tabela w-100 h-100">
    <table class="w-100 mt-3 text-center">
        <tr class="" style="border-bottom:2px solid red; height:10px">
            @if ($datas->count()>0)
            <th class="p-2" style="width: 5%;">ID</th>
            <th class="px-2" style="width: 30%">Email Passageiro</th>
            <th  class="px-2" style="width: 10%">Desc</th>
            <th class="px-2" style="width: 20%">Data</th>
            <th class="px-2" style="width: 10%">Tema da Dúvida</th>
            <th class="text-center" style="width: 15%">Visualizar Mensagem</th>
            @else
                <th class="p-2"></th>
            @endif
           
        </tr>
        @if ($datas)
           @foreach ($datas as $data)
        <tr style="border-bottom:1.5px solid red; ">
               <td class="px-2 fw-bold ">{{ $data->idSuporte }}</td>
               <td class="px-2 fw-bold">{{ $data->email }}</td>
               <td id="" class="text-center px-2 fw-bold"><p id="desc" class="text-center">{{ $data->desc }}</p></td>
               <td class="px-2 fw-bold">{{ $data->data }}</td>
               <td class="px-2 fw-bold">{{ $data->tema }}</td>
               <td class="justify-content-center align-items-center d-flex  py-2">  <a href="{{ route('caixaEntrada.show', $data->idSuporte) }}" class="text-dark" ><i class="fa-solid fa-info"></i></a></td>
        </tr>
               @endforeach
                    
            @else
            <tr style="border-bottom:1.5px solid red">
               <td>Não há pedidos de suporte</td>
            </tr>
            @endif
            
        

    </table>
</div>   
@endsection

@include('components.modal')
<script src="{{ URL::asset('js/modal.js') }}"></script>

@section('pageTitle','Caixa de Entrada')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection