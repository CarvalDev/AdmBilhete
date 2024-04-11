@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/ajuda.css') }}">
@endpush

@section('title', 'Editar pedido de Ajuda')

@section('content')

<div class="tudo w-100 h-100">
    <div class="header" >
        <div class="tituloAjudaArea">
            <h1 id="tituloAjuda"> Como trocar o bilhete selecionado? </h1>
        </div>

        <div class="categoriasAjuda">
            <div id="tituloCatAjuda">
                Bilhete
            </div>
            <div class="caminhosAjuda">
                <div class="caminho">
                    Inicio
                </div>
                <div class="caminho">
                    Config.
                </div>
                <div class="caminho">
                    Bilhete
                </div>
            </div>
        </div>

    </div>

    <div class="descricaoAjuda w-100 p-5 d-flex align-items-center justify-content-center" style="height: 45%;">
        <p class="textoAjuda h-100 w-100" style="font-size: 22px;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae ullam et repellat iure id! Iste quod unde, neque vel fugit maxime voluptatem veritatis, reiciendis architecto, natus laborum dignissimos ut placeat?
        </p>
    </div>
    <div class="xstatus w-100 d-flex flex-row" style="height: 30%;">
        <div class="porcentagens h-100 w-25 ">
            
        </div>
        <div class="acaos w-75 h-100 d-flex">
            <div class="w-100 h-100 d-flex align-items-end justify-content-end px-5 gap-5 pb-3">
                <button type="submit" class="ativar bg-danger border border-none p-2 px-4 text-white fs-4" style="border-radius: 10px;">
                    <span>Desativar</span>
                </button>
                <button type="submit" class="ativar bg-success border border-none p-2 px-4 text-white fs-4" style="border-radius: 10px;">
                    <span>Atualizar</span>
                </button>
            </div>
        </div>
    </div>
</div>   


@endsection


@section('pageTitle', 'EDITAR PEDIDO DE AJUDA')

