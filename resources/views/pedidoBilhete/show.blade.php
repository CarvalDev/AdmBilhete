@extends('layouts.mainLayout')

 <!-- @push('css')
<link rel="stylesheet" href="{{ URL::asset('css/') }}" type="text/css"> 
@endpush  -->

@section('title', 'Pedido do Bilhete')

@section('content')
<div class="w-100 h-100">
    <div class="header w-100 d-flex flex-row" style="height: 35%;border-bottom: 1px solid black">
        <div class="areaImage w-25 h-100 d-flex  align-items-center justify-content-center">
            <img src="../../../public/images/pessoa.jpg" style="border-radius: 50%;border: 8px solid red;width: 57%;height: 85%"/>
        </div>
        <div class="w-75 d-flex flex-column justify-content-center">
                <h1 class="text-uppercase fw-bold">{{ $passageiro->nomePassageiro }}</h1>
                <h3 class="fw-bold">{{ $passageiro->emailPassageiro }}</h3>
                <h3 class="fw-bold">{{ $passageiro->cpfPassageiro }}</h3>
                <h3 class="fw-bold">{{ $passageiro->dataNascPassageiro }}</h3>
        </div>
    </div>
    <div class="body w-100 border border-dark" style="height: 65%;">
    </div>

</div>




@endsection