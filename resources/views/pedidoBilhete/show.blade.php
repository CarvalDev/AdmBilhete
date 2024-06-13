@extends('layouts.mainLayout')

 <!-- @push('css')
<link rel="stylesheet" href="{{ URL::asset('css/') }}" type="text/css"> 
@endpush  -->

@section('title', 'Pedido de Bilhete')
@section('pageTitle', 'Pedido de bilhete')
@section('content')
<div class="w-100 h-100">
    <div class="header w-100 d-flex flex-row" style="height: 35%;border-bottom: 1px solid black">
        <div class="areaImage w-25 h-100 d-flex  align-items-center justify-content-center">
            <img @if ($data->foto != null)
                src="{{ url("storage/$data->foto") }}" 
                @else  
                src="{{ url('images/userPadrao.png') }}"
            @endif class="rounded-circle" width="180px"/>
        </div>
        <div class="w-75 d-flex flex-column justify-content-center">
                <h1 class="text-uppercase fw-bold">{{ $data->nome }}</h1>
                <h5 class="fw-bold text-muted">{{ $data->email }}</h5>
                <h5 class="fw-bold text-muted">{{ $data->cpf }}</h5>
                <h5 class="fw-bold text-muted">{{ $data->nasc }}</h5>
        </div>
    </div>
    <div class="body w-100 border border-dark" style="height: 65%;">
        <div class="w-75 d-flex flex-column justify-content-center">
            <h5 class="text-uppercase fw-bold">Tipo de bilhete: {{ $data->tipo }}</h5>
            <h5 class="fw-bold text-muted">{{ $data->status }}</h5>
            <h5 class="fw-bold text-muted">{{ $data->data }}</h5>
            
    </div>
    </div>

</div>




@endsection