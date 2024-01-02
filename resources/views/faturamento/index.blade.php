@extends('layouts.mainLayout')

@section('title', 'pagina login')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/dashboard.css') }}" type="text/css">
@endpush
@section('content')
<div id="sectionPrincipal" class="container  d-flex flex-column alig-items-center justify-content-between">
    
    <div style="height: 45%" class="separator w-100   d-flex flex-row justify-content-center align-items-center">
        <div class="item h-100 d-flex flex-column justify-content-between align-items-center">
            <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Recargas Mensais</span></div>
            <div class="w-100 text-center"><span class="fs-1 fw-bold">4000</span></div>
            <div class="w-100"></div>
        </div>
        <div style="border-left: 1px solid #FF0000" class="item h-100 d-flex flex-column justify-content-between align-items-center">
            <div class="w-100 text-center"><span class="fs-3 fw-bold" style="font-weight: 400">Mês Atual</span></div>
            <div class="w-100 text-center"><span class="fs-1 fw-bold">R$ 17600,00</span></div>
            <div class="w-100"></div>
        </div>
    </div>
  
</div>
    @endsection

    @section('pageTitle', 'Faturamento')