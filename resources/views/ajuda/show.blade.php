@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/ajuda.css') }}">
@endpush

@section('title', 'Editar pedido de Ajuda')

@section('content')

<form id="updateAjuda" action="{{ route('ajuda.update', $ajuda->id) }}" class="tudo w-100 h-100">
    @csrf
    @method('PUT')
    <div class="header" >
        <div class="tituloAjudaArea">
            <input type="text"  class="form-control w-50" placeholder="Duvida" id="tituloAjuda" name="tituloAjuda" value="{{$ajuda->tituloAjuda}}">
        </div>

        <div class="categoriasAjuda">
            <div id="tituloCatAjuda" style="width:10vw;">
                <select id="categoriaAjuda_id" class="input w-100 fs-4 ps-3" name="categoriaAjuda_id" style="outline:none;border:none">
                    @foreach ($categoriaAjuda as $categoria)
                    <option value="{{ $categoria->id }}" {{ $categoria->id == $ajuda->categoriaAjuda_id ? 'selected' : '' }}>
                        {{ $categoria->nomeCategoria }}
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="caminhosAjuda">
                <div class="caminho">
                    <input type="text"  class="form-control fw-bold" placeholder="Caminho" id="caminhoAjuda" name="caminhoAjuda" value="{{$ajuda->caminhoAjuda1}}">
                </div>
                <div class="caminho">
                    <input type="text"  class="form-control fw-bold" placeholder="Caminho" id="caminhoAjuda" name="caminhoAjuda2" value="{{$ajuda->caminhoAjuda2}}">
                </div>
                <div class="caminho">
                    <input type="text"  class="form-control fw-bold" placeholder="Caminho" id="caminhoAjuda" name="caminhoAjuda3" value="{{$ajuda->caminhoAjuda3}}">
                </div>
            </div>
        </div>

    </div>

    <div class="descricaoAjuda w-100 p-5 d-flex align-items-center justify-content-center" style="height: 45%;">
        <textarea name="descAjuda" class="textoAjuda h-100 w-100" style="font-size: 22px;">
            {{$ajuda->descAjuda}}
        </textarea>
    </div>
    <div class="xstatus w-100 d-flex flex-row" style="height: 30%;">
        <div class="porcentagens h-100 w-25 ">
            
        </div>
        <div class="acaos w-75 h-100 d-flex">
            <div class="w-100 h-100 d-flex align-items-end justify-content-end px-5 gap-5 pb-3">
                @if ($ajuda->statusAjuda == "Ativo")
                    <button type="button" onclick="pegaStatus('Inativo', {{ $ajuda->id }})" data-bs-toggle="modal" data-bs-target="#desativar" class="ativar bg-danger border border-none p-2 px-4 text-white fs-4" style="border-radius: 10px;">
                        <span>Desativar</span>
                    </button>
                @else
                    <button type="button" onclick="pegaStatus('Ativo', {{ $ajuda->id }})" data-bs-toggle="modal" data-bs-target="#ativar" class="ativar bg-success border border-none p-2 px-4 text-white fs-4" style="border-radius: 10px;">
                        <span>Reativar</span>
                    </button>
                @endif
                <button type="submit" class="ativar bg-success border border-none p-2 px-4 text-white fs-4" style="border-radius: 10px;">
                    <span>Atualizar</span>
                </button>
            </div>
        </div>
    </div>
</form>   
@include('components.modalDesativarAjuda')
                @include('components.modalAtivarAjuda')
<script src="{{ URL::asset('js/statusAjuda.js') }}"></script>

@endsection


@section('pageTitle', 'EDITAR PEDIDO DE AJUDA')

