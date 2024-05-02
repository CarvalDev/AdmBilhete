@extends('layouts.mainLayout')

@section('title','Painel de controle')
@section('pageTitle', 'Dashboard')
@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" type="text/css">
@endpush
    
@section('content')
    <div class="container m-0 d-flex   align-items-center h-100  " id="max">
        <div id="main" class="d-flex m-0  justify-content-between flex-column align-items-start  w-100">
           <section id="primeira-linha" class="  d-flex flex-row align-items-center justify-content-between ">
                <div id="bloco-passageiros" class=" d-flex flex-column justify-content-between align-items-center" >
                    <div class="passageirosCad  d-flex flex-row justify-content-around align-items-center" >
                        <div id="traco" class="d-flex justify-content-center align-items-center">
                            <span class="traco">-</span>
                        </div>
                        <div id="numero" class="d-flex  justify-content-center align-items-center">
                            <span class="numeroPassageiro">400</span>
                        </div>
                        <div id="desc" class="d-flex flex-column justify-content-center align-items-center">
                            <span style="font-size: 20px">passageiros</span>
                            <span style="font-size: 18px; color:#B83810">sem cadastro</span>
                        </div>
                    </div>
                    <div class="passageirosCad comCad  d-flex flex-row justify-content-around align-items-center">
                        <div id="traco" class="d-flex justify-content-center align-items-center">
                            <span class="traco text-white">-</span>
                        </div>
                        <div id="numero" class="d-flex  justify-content-center align-items-center">
                            <span class="numeroPassageiro text-white">130</span>
                        </div>
                        <div id="desc" class="d-flex flex-column justify-content-center align-items-center">
                            <span class="text-white" style="font-size: 20px">passageiros</span>
                            <span style="font-size: 18px; color:#3C7352">com cadastro</span>
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
                                    <span style="font-size: 66px; color:#3C7352" >33/</span>
                                </div>
                                <div id="abertosSuporte" class="d-flex  justify-content-start align-items-start">
                                    <span style="font-size: 24px">231</span>
                                </div>

                            </div>
                            <div id="barraSuporte" class=" d-flex justify-content-start align-items-center">
                                <div id="barraPreenchida"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="bloco-bilhetes" class="border  d-flex flex-column justify-content-center align-items-center">
                    <div class="border d-flex justify-content-start align-items-center traco-dois" id=""> 
                        <span class="traco traco-span">-</span>
                    </div>
                    <div class="conteudo  d-flex justify-content-start align-items-center flex-column">
                        <div id="tituloSuporte" class="border">
                            <span style="font-size: 20px; margin-left: 20px;">bilhetes emitidos</span>

                        </div>
                    </div>
                </div>
            </section>  
            <section id="segunda-linha" class="  d-flex flex-row align-items-center justify-content-between">

                <div id="bloco-fluxo" class="border d-flex flex-column justify-content-center align-items-center" >
                    <div class="border d-flex justify-content-start align-items-center traco-dois" id=""> 
                        <span class="traco traco-span">-</span>
                    </div>
                    <div class="conteudo "></div>
                </div>
                <div id="bloco-suportes" class="border d-flex flex-column justify-content-center align-items-center"> 
                    <div class="border d-flex justify-content-start align-items-center traco-dois" id=""> 
                        <span class="traco traco-span">-</span>
                    </div>
                    <div class="conteudo "></div>
                </div>
                <div id="bloco-blocos" class=" d-flex flex-column justify-content-between ">
                    <div id="divisao" class=" d-flex justify-content-between align-items-center">
                        <div class="subBloco border d-flex flex-column justify-content-center align-items-center">
                            <div class="border d-flex justify-content-start align-items-center traco-dois" id=""> 
                                <span class="traco traco-span">-</span>
                            </div>
                            <div class="conteudo "></div>
                        </div>
                        <div class="subBloco border  d-flex flex-column justify-content-center align-items-center">
                            <div class="border d-flex justify-content-start align-items-center traco-dois" id=""> 
                                <span class="traco traco-span">-</span>
                            </div>
                            <div class="conteudo "></div>
                        </div>

                    </div>
                    <div id="financeiro" class="border  ">

                    </div>
                </div>
            </section>    
        </div> 

    </div>
@endsection


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>









