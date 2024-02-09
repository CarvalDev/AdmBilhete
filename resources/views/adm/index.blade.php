@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/passageiros.css') }}" type="text/css">
@endpush

@section('title', 'Administradores')

@section('content')

<div class="tabela w-100 h-100">
    <div class="d-flex justify-content-end align-items-center container">    
        <a href="{{ route('adm.form') }}" class="border-0"><i class="fas fa-plus-circle fa-2x" aria-hidden="true"></i></a>
    </div>
    @if (count($adms)>0)
    <table id="tabela" class="w-100 mt-3 text-center">

        <tr class="" style="border-bottom:1px solid red">
            <th class="p-2" style="width: 10%;">ID</th>
            <th class="px-2" style="width: 25%">Nome</th>
            <th class="px-2" style="width: 25%">Email</th>
            <th class="px-2" style="width: 20%">Editar</th>
            <th class="text-center" style="width: 20%">Remover</th>
        </tr>
       
            
        
        @foreach ($adms as $adm)
            
        <tr style="border-bottom:1.5px solid red">
            <td class="px-2 fw-bold ">{{ $adm->id }}</td>
            <td class="px-2 fw-bold">{{$adm->nomeAdm}}</td>
            <td class="px-2 fw-bold">{{$adm->emailAdm}}</td>
            <td class="  py-2"><a href="{{ route('adm.edit', $adm->id) }}" class="btn px-4" style=""><i class="fa-solid fa-pen-to-square"></i></a></td>
            <form action="{{ route('adm.destroy', $adm->id) }}" method="POST">
                @csrf
                @method('DELETE')
            <td class="py-2"><button type="submit" class="btn px-4" style=""><i class="fa-solid fa-trash"></i></button></td>
            </form>
        </tr>
        @endforeach
        
        
            
        
        
    </table>
    @else
        <div class="w-100 h-50 d-flex justify-content-center align-items-center ">
            <span class="fs-3">Não há administradores para exibir</span>
        </div>
        @endif
</div>


<script src="{{ URL::asset('js/modalPassageiro.js') }}"></script>

@include('adm.ajax.adm')




@endsection
@section('pageTitle', 'Administradores')

@section('pesquisa')
@include('components.barraPesquisa')
@endsection
