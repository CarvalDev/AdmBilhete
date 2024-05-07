@extends('layouts.mainLayout')

@section('title', 'Financeiro')
@section('pageTitle', 'Financeiro')
@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/financeiro.css') }}" type="text/css">
@endpush
@section('content')

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
                        <span style="font-size: 32px; margin-left: 20px; color:#50a296">740.000 R$</span>
                        <div class="d-flex gap-1 justify-content-center align-items-center flex-row">
                            <i style="color:#46a2ee;margin-left:20px; font-size:16px" class='bx bx-trending-up'></i>
                            <span style="font-size: 10px; "> 5% desde semana passada</span>
                        </div>
                    </div>
                    <div id="totalCompras" class=" d-flex justify-content-start align-items-center flex-column h-100" style="width: 45%;">
                        <span>total de compras</span>
                        <span style="font-size: 30px">20K</span>
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
                        <span style="font-size: 32px; margin-left: 20px; color:#50a296">3.000 R$</span>
                        <div class="d-flex gap-1 justify-content-center align-items-center flex-row">
                            <i style="color:#e8696c;margin-left:20px; font-size:16px" class='bx bx-trending-down'></i>
                            <span style="font-size: 10px; "> 5% desde semana passada</span>
                        </div>                    </div>
                    <div id="totalCompras" class=" rounded  d-flex justify-content-start align-items-center flex-column h-100" style="width: 45%;">
                        <span>total de emissões</span>
                        <span style="font-size: 30px">300</span>
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
                        <i style="font-size: 22px;" class='bx bxs-edit'></i>
                    </div>
                </div>
                <div id="divisor" class=" w-100 d-flex flex-row justify-content-center align-items-center">
                    <div id="precoLabel" class=" w-50 d-flex justify-content-start align-items-start">
                        <span style="font-size:36px;margin-left:20px; color:#50a296">4,40 R$</span>
                    </div>
                    <div id="reajustes" class="w-50 d-flex justify-content-between align-items-center flex-column">
                        <span style="font-size: 18px;" class="mb-2" >ultimos reajustes</span>
                        <div class="justify-content-center w-100 align-items-center gap-1 flex-column d-flex">
                            <div class="justify-content-between w-75 align-items-center flex-row d-flex">
                                <span>01/2024</span>
                                <span>4,40 R$</span>
                            </div>
                            <div class="justify-content-between w-75 align-items-center flex-row d-flex">
                                <span>01/2023</span>
                                <span>4,20 R$</span>
                            </div>
                            <div class="justify-content-between w-75 align-items-center flex-row d-flex">
                                <span>01/2022</span>
                                <span>3,80 R$</span>
                            </div>
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


    