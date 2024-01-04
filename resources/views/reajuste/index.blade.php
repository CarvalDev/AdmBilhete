@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/reajuste.css') }}" type="text/css">
@endpush

@section('title','Reajuste')

    
@section('content')
    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center border ">
    <div class="d-flex justify-content-center aling-itens-center mt-3 ">
    <span class="border border-danger rounded-4 p-xl-4 p-lg-3   d-flex flex-column" style="height: 20vh;width:20vh;">
        <p class="fw-bold text-center mb-xl-3 mt-xl-3 mb-lg-4 mt-lg-4 mb-3 mt-5">Preço atual</p>
        <p class="fw-bold text-center mb-xl-3 mb-lg-4 mb-lg-4 mb-3">R$4,40</p>
        <button id="btn-modal" class="btn d-flex justify-content-end btnBorda" ><i class="fa-regular fa-pen-to-square fa-xl"></i></button>
    </span>
</div>
<div>
    <canvas width="800" id="grafico" ></canvas>
</div>

    </div>

    <script src="{{ asset('js/reajuste.js') }}"></script> 
    <script src="{{ URL::asset('js/modalCatraca.js') }}"></script>
    @include('components.modalReajuste')
    @endsection



@section('pageTitle', 'Reajuste do Preço')







