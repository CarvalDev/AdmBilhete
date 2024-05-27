@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/ajuda.css') }}">
@endpush

@section('title', 'Editar pedido de Ajuda')

@section('content')

<form method="POST" class="tudo w-100 h-100" id="ajudaStore">
    @csrf
    <div class="header" >
        <div class="tituloAjudaArea">
        
            <input type="text"  class="form-control w-50" placeholder="Duvida" id="tituloAjuda" name="tituloAjuda">
        </div>

        <div class="categoriasAjuda">
            <div id="tituloCatAjuda">
                <select id="categoriaAjuda_id" class="input w-100 fs-4 ps-3" name="categoriaAjuda_id" style="outline:none;border:none">
                    @for ($i = 0; $i < count($categoriaAjuda); $i++)
                    <option value="{{ $categoriaAjuda[$i]->id }}">{{ $categoriaAjuda[$i]->nomeCategoria }}</option>
                    @endfor
                </select>
            </div>
            <div class="caminhosAjuda">
                <div class="caminho">
                    <input type="text"  class="form-control fw-bold" placeholder="Caminho" id="caminhoAjuda" name="caminhoAjuda">
                </div>
                <div class="caminho">
                    <input type="text"  class="form-control fw-bold" placeholder="Caminho 2" id="caminhoAjuda2" name="caminhoAjuda2">
                </div>
                <div class="caminho">
                    <input type="text"  class="form-control fw-bold" placeholder="Caminho 3" id="caminhoAjuda3" name="caminhoAjuda3">
                </div>
            </div>
        </div>

    </div>

    <div class="descricaoAjuda w-100 p-5 d-flex align-items-center justify-content-center" style="height: 45%;">
        <textarea name="descAjuda" class="textoAjuda h-100 w-100" style="font-size: 22px;">
        </textarea>
    </div>
    <div class="xstatus w-100 d-flex flex-row" style="height: 30%;">
        <div class="porcentagens h-100 w-25 ">
            
        </div>
        <div class="acaos w-75 h-100 d-flex ">
            <div class="w-100 h-100 d-flex align-items-end justify-content-end px-5 gap-5 pb-5">
                <button type="submit" class="ativar bg-success border border-none p-2 px-4 text-white fs-4" style="border-radius: 10px;">
                    <span>Adicionar</span>
                </button>
            </div>
        </div>
    </div>
</form>   

@include('ajuda.ajax.ajuda')
@endsection


@section('pageTitle', 'ADICIONAR PEDIDO DE AJUDA')

