@extends('layouts.mainLayout')

@section('title','Painel de controle')
@section('pageTitle', 'Dashboard')
@push('css')

<link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" type="text/css">

@endpush

@section('content')
    <div class="container m-0 d-flex   align-items-center h-100  " id="max">
        <div id="main" class="d-flex m-0 justify-content-between flex-column align-items-start w-100">
           <section id="primeira-linha" class="  d-flex flex-row align-items-center justify-content-between ">
                <div id="bloco-passageiros" class=" d-flex flex-column justify-content-between align-items-center" >
                    <div class="passageirosCad  d-flex flex-row justify-content-around align-items-center" >
                        <div id="traco" class="d-flex justify-content-center align-items-center">
                            <span class="traco">-</span>
                        </div>
                        <div id="numero" class="d-flex  justify-content-center align-items-center">
                            <span class="numeroPassageiro">{{ $passageiro['semCadastro'] }}</span>
                        </div>
                        <div id="desc" class="d-flex flex-column justify-content-center align-items-center">
                            <span style="font-size: 18px">passageiros</span>
                            <span style="font-size: 16px; color:#B83810">sem cadastro</span>
                        </div>
                    </div>
                    <div class="passageirosCad comCad  d-flex flex-row justify-content-around align-items-center">
                        <div id="traco" class="d-flex justify-content-center align-items-center">
                            <span class="traco text-white">-</span>
                        </div>
                        <div id="numero" class="d-flex  justify-content-center align-items-center">
                            <span class="numeroPassageiro text-white">{{ $passageiro['comCadastro'] }}</span>
                        </div>
                        <div id="desc" class="d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white" style="font-size: 18px">passageiros</span>
                            <span style="font-size: 16px; color:#3C7352">com cadastro</span>
                        </div>
                    </div>
                </div>
                <div id="bloco-suportes" class=" d-flex flex-column justify-content-center align-items-center">
                    <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                        <span class="traco traco-span">-</span>
                    </div>
                    <div class="conteudo d-flex justify-content-start align-items-center flex-column ">
                        <div id="tituloSuporte" class="">
                            <span style="font-size: 20px; margin-left: 20px;">suportes fechados</span>

                        </div>
                        <div id="infosSuporte" class=" d-flex flex-column justify-content-center align-items-center">
                            <div class=" d-flex flex-row justify-content-center align-items-center" id="numerosSuporte">
                                <div id="fechadosSuporte" class="d-flex  justify-content-center align-items-center">
                                    <span style="font-size: 66px; color:#3C7352">{{ $suporte['fechados'] }}/</span>
                                </div>
                                <div id="abertosSuporte" class="d-flex ms-2  justify-content-start align-items-start">
                                    <span style="font-size: 24px">{{ $suporte['total'] }}</span>
                                    <input type="hidden" id="porcentagemSuporte" value={{ $suporte['porcentagem'] }}>
                                </div>

                            </div>
                            <div id="barraSuporte" class=" d-flex justify-content-start align-items-center">
                                <div id="barraPreenchida"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bloco-bilhetes" class="  d-flex flex-column justify-content-center align-items-center">
                    <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                        <span class="traco traco-span">-</span>
                    </div>
                    <div class="conteudo  d-flex justify-content-start align-items-center flex-column">
                        <div id="tituloSuporte" class="">
                            <span style="font-size: 20px; margin-left: 20px;">bilhetes emitidos</span>

                        </div>
                        <div id="divisorBilhete" class="d-flex justify-content-center align-items-center flex-row ">
                            <div id="infosBilhete" class=" d-flex justify-content-end flex-row align-items-center">
                                <div id="totalBilhetes" class=" d-flex justify-content-center align-items-center">
                                    <span style="font-size: 48px">{{ $bilhete['total'] }}/</span>
                                </div>
                                <div id="atualizacaoBilhetes" class=" d-flex flex-column justify-content-center align-items-start">
                                    <span style="font-size: 20px">+{{ $bilhete['ultimoDia'] }}</span>
                                    <span style="font-weight: 400; font-size: 11px">desde ontem</span>
                                    <input type="hidden" value={{ $bilhete['comum'] }} id="comum">
                                    <input type="hidden" value={{ $bilhete['meia'] }} id="meia">
                                    <input type="hidden" value={{ $bilhete['gratuidade'] }} id="gratuidade">
                                </div>
                            </div>
                            <div id="graficoBilheteArea" class=" d-flex justify-content-center align-items-center">
                                <canvas id="graficoBilhete"></canvas>

                            </div>
                        </div>
                    </div>
                </div>
            </section>  
            <section id="segunda-linha" class="  d-flex flex-row align-items-center justify-content-between">

                <div id="bloco-fluxo" class=" d-flex flex-column justify-content-center align-items-center" >
                    <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                        <span class="traco traco-span">-</span>
                    </div>
                    <div class="conteudo ">
                        <div id="tituloSuporte" class="">
                            <span style="font-size: 20px; margin-left: 20px;">fluxo de viagens</span>

                        </div>
                        <div id="totalViagens" class="d-flex justify-content-center  align-items-center">
                            <span id="totalConsumo" style="font-size: 64px">{{ $consumo['total'] }}</span>
                        </div>
                        <input type="hidden" name="dia" value={{ $consumo['day1'] }}>
                        <input type="hidden" name="dia" value={{ $consumo['day2'] }}>
                        <input type="hidden" name="dia" value={{ $consumo['day3'] }}>
                        <input type="hidden" name="dia" value={{ $consumo['day4'] }}>
                        <div id="graficoViagensArea" class=" d-flex justify-content-center align-items-end">
                            <canvas id="graficoViagens"></canvas>
                        </div>
                    </div>
                </div>
                <div id="bloco-suportes" class=" d-flex flex-column justify-content-center align-items-center"> 
                    <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                        <span class="traco traco-span">-</span>
                    </div>
                    <div class="conteudo ">
                        <div id="tituloSuporte" class="">
                            <span style="font-size: 20px; margin-left: 20px;">linhas mais utilizadas</span>

                        </div>
                        <div id="linhasGraficoArea" class="d-flex  justify-content-center align-items-center">
                            @foreach ($linha as $l)
                            <input type="hidden" name="numLinha" value={{ $l->numLinha }}>  
                            <input type="hidden" name="qtdConsumos" value={{ $l->qtdConsumos }}>   
                            @endforeach
                            <canvas id="linhasGrafico"></canvas>
                        </div>
                    </div>
                </div>
                <div id="bloco-blocos" class=" d-flex flex-column justify-content-between ">
                    <div id="divisao" class=" d-flex justify-content-between align-items-center">
                        <div class="subBloco  d-flex flex-column justify-content-center align-items-center">
                            <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                                <span class="traco traco-span">-</span>
                            </div>
                            <div class="conteudo ">
                                <div id="tituloSuporte" class="">
                                    <span style="font-size: 14px; margin-left: 20px;">pedidos de bilhetes</span>
        
                                </div>
                                <div class="d-flex justify-content-center align-items-center " style="height: 80%; width:100%">
                                    <span style="margin-bottom:35px; font-size:44px">{{ $pedido }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="subBloco   d-flex flex-column justify-content-center align-items-center">
                            <div class=" d-flex justify-content-start align-items-center traco-dois" id=""> 
                                <span class="traco traco-span">-</span>
                            </div>
                            <div class="conteudo ">
                                <div id="tituloSuporte" class="">
                                    <span style="font-size: 14px; margin-left: 20px;">catracas ativas</span>
        
                                </div>
                                <div class="d-flex justify-content-center align-items-center " style="height: 80%; width:100%">
                                    <span style="margin-bottom:35px; font-size:44px">{{ $catraca }}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="financeiro" class="border  ">

                    </div>
                </div>
            </section>    
        </div> 

    </div>
    <script src=" {{ URL::asset('js/homeGraficos.js')}} "></script>
    <script src=" {{ URL::asset('js/home.js')}} "></script>

@endsection


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>










