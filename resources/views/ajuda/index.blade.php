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
       
            
            <th class="py-2" style="width: 25%">Email Passageiro</th>
            <th class="py-2" style="width: 10%">Data</th>
            <th  class="py-2" style="width: 20%;">Status</th>
            <th class="py-2" style="width: 20%">Tema da Dúvida</th>
            <th class="text-center py-2" style="width: 15%">Visualizar Mensagem</th>
          
                <th class="p-2"></th>
            
           
        </tr>
        
        <tr class="text-center" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid ">
               
               <td class="py-2 fw-bold">a</td>
               <td class="py-2 fw-bold">a</td>
               <td  class="text-center px-2 fw-bold">a</td>
               <td class="py-2 fw-bold">a</td>
               <td class="px-2 fw-bold "> 
                    <a href="{{ route('ajuda.show', 1) }}" class="text-dark mt-2 ">
                        <i class='fs-4 bx bxs-hand-up'></i>
                    </a>
               </td>
        </tr>
              
            <!-- <tr style="border-bottom:1.5px solid red">
               <td>Não há pedidos de suporte</td>
            </tr> -->
            
            
        

    </table>
</div>
</div>   


@endsection


@section('pageTitle', 'Pedidos de Ajudas')

@section('pesquisa')
@include('components.barraPesquisa')
@endsection