@extends('layouts.mainLayout')

@section('title','pagina login')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" type="text/css">
@endpush
    
@section('content')
    <div id="sectionPrincipal" class="container  d-flex flex-column alig-items-center justify-content-between">
        <div style="height: 45%" class="w-100   d-flex flex-row justify-content-center align-items-center">
            <div class="item1 d-flex flex-column justify-content-between align-items-center   h-100">
                <div class="w-100 text-center"><span class="fs-2" style="font-weight: 400">Usuarios Registrados</span></div>
                <div class="w-100 text-center"><span class="display-4 fw-bolder">459</span></div>
                <div class="w-100"></div>

            </div>
            <div class="item2 d-flex flex-column justify-content-between align-items-center   h-100">
                <div class="w-100 text-center"><span class="fs-2" style="font-weight: 400">Recargas Efetuadas</span></div>
                <div class="w-100 text-center"><span class="display-4 fw-bolder">459</span></div>
                <div class="w-100"></div>

            </div>
            <div class="item3 d-flex flex-column justify-content-between align-items-center   h-100">
                <div class="w-100 text-center"><span class="fs-2" style="font-weight: 400">Fluxo De Viagens(Diárias)</span></div>
                <div class="w-100 text-center"><span class="display-4 fw-bolder">"Grafico em linha"</span></div>
                <div class="w-100"></div>
                
            </div>
            
        </div>
        <div style="height: 45%" class="separator w-100   d-flex flex-row justify-content-center align-items-center">
            <div class="item h-100 d-flex flex-column justify-content-between align-items-center">
                <div class="w-100 text-center"><span class="fs-2" style="font-weight: 400">Faturamentos</span></div>
                <div class="w-100 text-center"><span class="display-4 fw-bolder">R$1.000.000,00</span></div>
                <div class="w-100"></div>
            </div>
            <div style="border-left: 1px solid #FF0000" class="item h-100 d-flex flex-column justify-content-between align-items-center">
                <div class="w-100 text-center"><span class="fs-2" style="font-weight: 400">Catracas em atividade</span></div>
                <div class="w-100 text-center"><span class="display-4 fw-bolder">459</span></div>
                <div class="w-100"></div>
            </div>
        </div>
        <button id="btn-modal" onclick="modPerfil()">aaaaaa</button>
    </div>
@endsection

@include('components.modal')
<script src="{{ URL::asset('js/modal.js') }}"></script>

@section('pageTitle', 'Painel de Controle')




