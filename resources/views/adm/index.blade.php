@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/passageiros.css') }}" type="text/css">
@endpush

@section('title', 'Administradores')

@section('content')

<div class="tabela w-100 h-100">
    <div class="d-flex justify-content-end align-items-center container">    
        <a href="{{ route('adm.form') }}" class="border-0"><i class="fas fa-plus-circle fa-2x text-dark" aria-hidden="true"></i></a>
    </div>
    @if (count($adms)>0)
    <div id="table-content">
    <table id="tabela" class="mx-auto mt-3 text-center" style="width: 95%">

        <tr class="" style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
            
            <th class="px-2" style="width: 30%">Nome</th>
            <th class="px-2" style="width: 30%">Email</th>
            <th class="px-2" style="width: 20%">Editar</th>
            <th class="text-center" style="width: 20%">Remover</th>
        </tr>
       
            
        
        @foreach ($adms as $adm)
            
        <tr style="border-bottom:rgba(1, 1, 1, 0.1) 1px solid">
            
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
    <div class="p-3">
        {{ $adms->links() }}
    </div>
</div>
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
