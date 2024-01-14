@extends('layouts.mainLayout')

@section('title', 'pagina login')
@section('pageTitle', 'Faturamento')
@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" type="text/css">
@endpush
@section('content')
<div id="sectionPrincipal" class="container  d-flex flex-column alig-items-center justify-content-between">
    
    <div style="height: 20%" class="separator w-100   d-flex flex-row justify-content-center align-items-center">
        <div class="item h-100 d-flex flex-column justify-content-between align-items-center">
            <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Compras Totais</span></div>
            <div class="w-100 text-center"><span class="fs-1 fw-bold">{{$compras[0]->compras}}</span></div>
            <div class="w-100"></div>
        </div>
        <div style="border-left: 1px solid #FF0000" class="item h-100 d-flex flex-column justify-content-between align-items-center">
            <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Mês Atual</span></div>
            <div class="w-100 text-center"><span class="fs-1 fw-bold">R$ {{number_format($compras[0]->valor, 2, ",", ".")}}</span></div>
            <div class="w-100"></div>
        </div>
    </div>

    <div style="height: 75%" class="  w-100 d-flex justify-content-center align-itens-center">
        <canvas class=""   id="grafico" ></canvas>
    </div>
  
</div>
<script src="{{ asset('js/faturamento.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection


    