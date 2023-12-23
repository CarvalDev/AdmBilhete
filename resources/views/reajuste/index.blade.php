@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/reajuste.css') }}" type="text/css">
@endpush

@section('title','pagina login')

    
@section('content')
    <div class="w-100 h-100">
    <div class="d-flex justify-content-center aling-itens-center mt-3 ">
    <span class="border border-danger rounded-4 p-xl-4 p-lg-3   d-flex flex-column" style="height: 20vh;width:20vh;">
        <p class="fw-bold text-center mb-xl-3 mt-xl-3 mb-lg-4 mt-lg-4 mb-3 mt-5">Preço atual</p>
        <p class="fw-bold text-center mb-xl-3 mb-lg-4 mb-lg-4 mb-3">R$4,40</p>
        <button id="btn-modal" class="btn d-flex justify-content-end btnBorda" onclick="modPerfil()"><i class="fa-regular fa-pen-to-square fa-xl"></i></button>
    </span>
@endsection

@include('components.modalReajuste')


@section('pageTitle', 'Reajuste do Preço')







