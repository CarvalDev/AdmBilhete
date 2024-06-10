@extends('layouts.mainLayout')

@section('title', 'Financeiro')
@section('pageTitle', 'Financeiro')
@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/financeiro.css') }}" type="text/css">
@endpush
@section('content')
 
@include('faturamento.partials.modal_alterar_preco')
<div class="container d-flex justify-content-between align-items-center flex-column " style="height: 98%">
    <div class="linha-principal  d-flex justify-content-between align-items-center flex-row" id="linhaUm">
        <div class="blocos  h-100" >
            <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                <span class="traco traco-span">-</span>
            </div>
            <div class="conteudo d-flex justify-content-start align-items-center flex-column ">
                <div id="tituloSuporte" class=" ">
                    <p style="font-size: 18px; margin-left: 20px;">faturamento compras</p>

                </div>
                <div id="infosFatCompras" class=" d-flex justify-content-center align-items-end flex-row">
                    <div id="totalFat" class=" d-flex flex-column justify-content-center align-items-start  h-75" style="width: 55%">
                        <span style="font-size: 32px; margin-left: 20px; color:#3C7352">{{ number_format($compras[0]->valor, 2, ',', '.') }} R$</span>
                        <div class="d-flex gap-1 justify-content-center align-items-center flex-row">
                            <i  @if ($compras[0]->aumento)
                                style="color:#3C7352;margin-left:20px; font-size:16px" 
                                class='bx bx-trending-up'
                                @else
                                style="color:#B83810;margin-left:20px; font-size:16px" 
                                class='bx bx-trending-down'
                            @endif ></i>
                            <span style="font-size: 10px; "> {{ ($compras[0]->lastWeek) }}% desde semana passada</span>
                        </div>
                    </div>
                    <div id="totalCompras" class=" d-flex justify-content-start align-items-center flex-column h-100" style="width: 45%;">
                        <span>total de compras</span>
                        <span id="total" style="font-size: 30px">{{ number_format($compras[0]->compras, 0, ',', '.') }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="blocos  h-100" >
            <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                <span class="traco traco-span">-</span>
            </div>
            <div class="conteudo d-flex justify-content-start align-items-center flex-column ">
                <div id="tituloSuporte" class="">
                    <p style="font-size: 18px; margin-left: 20px;">faturamento emissão de bilhetes</p>

                </div>
                <div id="infosFatCompras" class=" d-flex justify-content-center align-items-end flex-row">
                    <div id="totalFat" class=" d-flex flex-column justify-content-center align-items-start  h-75" style="width: 55%">
                        <span style="font-size: 32px; margin-left: 20px; color:#3C7352">{{ number_format(($taxas[0]->valor), 0, ",", '.') }} R$</span>
                        <div class="d-flex gap-1 justify-content-center align-items-center flex-row">
                            <i  @if ($taxas[0]->aumento)
                                style="color:#3C7352;margin-left:20px; font-size:16px" 
                                class='bx bx-trending-up'
                                @else
                                style="color:#B83810;margin-left:20px; font-size:16px" 
                                class='bx bx-trending-down'
                            @endif ></i>
                            <span style="font-size: 10px; "> {{ $taxas[0]->lastWeek }}% desde semana passada</span>
                        </div>                    </div>
                    <div id="totalCompras" class=" rounded  d-flex justify-content-start align-items-center flex-column h-100" style="width: 45%;">
                        <span>total de emissões</span>
                        <span style="font-size: 30px">{{ $taxas[0]->taxas }}</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="blocos  h-100" >
            <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                <span class="traco traco-span">-</span>
            </div>
            <div class="conteudo d-flex justify-content-start align-items-center flex-column ">
                <div id="tituloSuporte" class="d-flex">
                    <div class="justify-content-center gap-2 align-items-center d-flex">
                        <span style="font-size: 18px; margin-left: 20px;">preço atual </span>
                        <i style="font-size: 22px;" class='bx bxs-edit' onclick="acionaModal()"></i>
                    </div>
                </div>
                <div id="divisor" class=" w-100 d-flex flex-row justify-content-center align-items-center">
                    <div id="precoLabel" class=" w-50 d-flex justify-content-start align-items-start">
                        <span style="font-size:36px;margin-left:20px; color:#3C7352">{{ number_format(($precos['preco']),2,',',',') }} R$</span>
                    </div>
                    <div id="reajustes" class="w-50 d-flex justify-content-between align-items-center flex-column">
                        <span style="font-size: 18px;" class="mb-2" >ultimos reajustes</span>
                        <div class="justify-content-center w-100 align-items-center gap-1 flex-column d-flex">
                            @foreach ($precos['reajustes'] as $reajuste)
                            <div class="justify-content-between w-75 align-items-center flex-row d-flex">
                                <span>{{ $reajuste->dataPreco }}</span>
                                <span> {{number_format(($reajuste->passagemPreco),2,',',',')}} R$</span>
                            </div>
                            @endforeach
                            
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <div class="linha-principal   d-flex justify-content-between align-items-center flex-row" id="linhaDois">
        <div class="blocos  h-100" id="blocoUm">
            <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                <span class="traco traco-span">-</span>
            </div>
            <div class="conteudo d-flex justify-content-start align-items-center flex-column ">
                <div id="tituloSuporte" class="d-flex">
                    
                        <span style="font-size: 18px; margin-left: 20px;">fluxo de caixa </span>
                        
                    
                </div>
                <div class=" d-flex justify-content-end gap-2 align-items-center flex-row" id="opcoes" >
                    <div class="quadrado">
                        <span>1M</span>
                    </div>
                    <div class="quadrado">
                        <span>3M</span>
                    </div>
                    <div class="quadrado">
                        <span>6M</span>
                    </div>
                    <div class="quadrado quadrado-active">
                        <span>1A</span>                        
                    </div>
                </div>
                    <canvas id="graficoFluxo" style="width: 800px; height: 400px;"></canvas>
                
            </div>
        </div>
        <div class="blocos border h-100" id="blocoDois">
            <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                <span class="traco traco-span">-</span>
            </div>
            <div class="conteudo d-flex justify-content-start align-items-center flex-column ">
                <div id="tituloSuporte" class="d-flex">
                    
                    <span style="font-size: 18px; margin-left: 20px;">compras por tipo de bilhete </span>
                    
                <input type="hidden" id="estudante" value={{ $bilhetes['estudante'] }}>
                <input type="hidden" id="estudante_meia" value={{ $bilhetes['estudante_meia'] }}>
                <input type="hidden" id="comum" value={{ $bilhetes['comum'] }}>
            </div>
            <canvas id="polar"style="width: 150px; height: 150px;"></canvas>
            </div>
        </div>
    </div>
</div>

@include('faturamento.ajax.grafico')
<script src="{{ asset('js/faturamento.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection


    