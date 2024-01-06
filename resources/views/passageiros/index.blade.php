@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/passageiros.css') }}" type="text/css">
@endpush

@section('title', 'Passageiros')

@section('content')

<div class="tabela w-100 h-100">
    <div class="d-flex justify-content-end align-items-center container">    
        <a href="{{ route('passageiros.form') }}" class="border-0"><i class="fas fa-plus-circle fa-2x" aria-hidden="true"></i></a>
    </div>
    @if (count($passageiros)>0)
    <table class="w-100 mt-3">

        <tr class="" style="border-bottom:1px solid red">
            <th class="p-2" style="width: 5%;">ID</th>
            <th class="px-2" style="width: 20%">Nome</th>
            <th class="px-2" style="width: 20%">Email</th>
            <th class="px-2" style="width: 20%">Nascimento</th>
            <th class="px-2" style="width: 20%">Cpf</th>
            <th class="text-center" style="width: 15%">Perfil</th>
        </tr>
       
            
        
        @foreach ($passageiros as $passageiro)
            
        <tr style="border-bottom:1.5px solid red">
            <td class="px-2 fw-bold ">{{ $passageiro->id }}</td>
            <td class="px-2 fw-bold">{{$passageiro->nomePassageiro}}</td>
            <td class="px-2 fw-bold">{{$passageiro->emailPassageiro}}</td>
            <td class="px-2 fw-bold">{{ $passageiro->dataNascPassageiro }}</td>
            <td class="px-2 fw-bold">{{ $passageiro->cpfPassageiro }}</td>
            <td class="justify-content-center align-items-center d-flex  py-2"><a href="{{route('perfilPassageiro.index', $passageiro->id)}}" class="btn px-4" style=""><i class="far fa-user-circle fa-xl"></i></a></td>
        </tr>
        @endforeach
        
        
            
        
        
    </table>
    @else
        <div class="w-100 h-50 d-flex justify-content-center align-items-center ">
            <span class="fs-3">Não há passageiros para exibir</span>
        </div>
        @endif
</div>


<script src="{{ URL::asset('js/modalPassageiro.js') }}"></script>
@endsection
@section('pageTitle', 'Passageiros')

@section('pesquisa')
    @include('components.barraPesquisa')
@endsection

