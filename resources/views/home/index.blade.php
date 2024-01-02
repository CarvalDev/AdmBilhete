@extends('layouts.mainLayout')

@section('title','Painel de controle')
@section('pageTitle', 'Painel de Controle')
@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" type="text/css">
@endpush
    
@section('content')
    <div id="sectionPrincipal" class="container  d-flex flex-column alig-items-center justify-content-between">
        <div style="height: 45%" class="w-100   d-flex flex-row justify-content-center align-items-center">
            <a href="{{ route('passageiros.index') }}" class="link d-flex flex-column justify-content-between align-items-center    h-100">
            <div class="item1 d-flex flex-column justify-content-between align-items-center    h-100">
                <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Passageiros Registrados</span></div>
                <div class="w-100 text-center"><span class="fs-1 fw-bolder">459</span></div>
                <div class="w-100"></div>

            </div>
        </a>

        <a href="{{ route('catracas.index') }}" class="link2 d-flex flex-column justify-content-between align-items-center    h-100">
            <div class="item2 d-flex flex-column justify-content-between align-items-center   h-100">
                <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Catracas Registradas</span></div>
                <div class="w-100 text-center"><span class="fs-1 fw-bolder">459</span></div>
                <div class="w-100"></div>

            </div>
        </a>


            <div class="item3 d-flex flex-column justify-content-between align-items-center   h-100">
                <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Fluxo De Viagens(Diárias)</span></div>
                <div class="w-100 text-center">
                    
                    <div>
                    
                        <canvas id="grafico" ></canvas>
                        
                  </div>
                
                </div>
                  
                <div class="w-100"></div>
                
            </div>
            
        </div>
        <div style="height: 45%" class="separator w-100   d-flex flex-row justify-content-center align-items-center">

            <a href="" class="link2 d-flex flex-column justify-content-between align-items-center    h-100">
            <div class="item h-100 d-flex flex-column justify-content-between align-items-center">
                <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Faturamentos</span></div>
                <div class="w-100 text-center"><span class="fs-1 fw-bold">R$1.000.000,00</span></div>
                <div class="w-100"></div>
            </div>
            </a>
            <a href="{{ route('caixaEntrada.index') }}" class="link2 d-flex flex-column justify-content-between align-items-center    h-100">
            <div style="border-left: 1px solid #FF0000" class="item h-100 d-flex flex-column justify-content-between align-items-center">
                <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Suporte</span></div>
                <div class="w-100 text-center"><span class="fs-1 fw-bold">459</span></div>
                <div class="w-100"></div>
            </div>
            </a>
        </div>
      
    </div>
    
    <script src="{{asset('js/app.js')}}"></script>
@endsection


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>









