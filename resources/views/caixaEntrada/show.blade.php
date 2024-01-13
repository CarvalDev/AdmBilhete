@extends('layouts.mainLayout')

@section('title')
    Pedido de Suporte
@endsection

@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/showCaixaEntrada.css') }}" type="text/css">
@endpush


@section('content')
    <div class="w-100 h-100 gap-1  d-flex flex-column justify-content-center align-items-center">
        <section class="w-100 h-50  d-flex flex-row justify-content-center align-items-center">
            <div id="userPlace" class="h-100   d-flex flex-column justify-content-center align-items-center" style="width: 40%">
                
                <div class="fotoPassageiro" style="height:70%;border-radius:8%;"  >
                    <a href="">
                        <img @if ($data->fotoPassageiro == '')
                        src="{{ url("images/userPadrao.png")}} 
                        @else
                        src="{{ url("storage/$data->fotoPassageiro")}} 
                        @endif   " class="w-100 h-100" style="border-radius: 8%" alt="">
                    </a>
                </div>
                <div class="dadosPrincipais d-flex flex-column " >
                    <div class="flex-row d-flex gap-2 justify-content-center"><p style="color:rgb(52, 49, 49);" class="fw-bold p-0 m-0">{{ $data->nomePassageiro }}</p></div>
                    <div class="flex-row d-flex gap-2 justify-content-center"><p  style="font-size: 12px" class="fw-bold text-secondary  p-0 m-0 mb-3 text-center">{{ $data->emailPassageiro }}</p></div>
                </div>
            </div>
            <div id="duvidaPlace" class="h-100  d-flex flex-column justify-content-center align-items-center" style="width: 60%">
                <div id="headerDuvida" style="height:20%" class=" w-100 d-flex justify-content-between align-items-center">
                    <span class="ms-3 fs-4">Tema da Dúvida: {{ $data->categoriaSuporte }} </span>
                    <span class="me-3">Data: {{ $data->dataAcao }}</span>
                </div>
                <div style="height:70%" class=" w-100 d-flex justify-content-center align-items-center">
                    <div style="width: 90%; height:95%" class=" overflow-auto">
                        <span class="w-100 p-2">
                            {{ $data->descSuporte }}
                            {{ $data->descSuporte }}
                            {{ $data->descSuporte }}
                        </span>
                    </div>
                </div>
            </div>

        </section>
        <section class="w-100 h-50  d-flex flex-row justify-content-center align-items-center">
                
            @if ($data->statusSuporte == 'Aberto')
                                
            
            <form id="fecharSuporte" action="{{ route('caixaEntrada.mail', [$data->passageiro_id, $data->id]) }}" method="post" class="d-flex  flex-row justify-content-center align-items-center h-100 " style="width: 85%">
                    @csrf
                    <div class="d-flex flex-column w-75  gap-2 h-100 justify-content-center align-items-center">
                    <div class="w-75 ">
                        <span class="fw-bold fs-5" style="text-decoration: underline #ffd60a">Responder Suporte</span>
                    </div>
                    <textarea name="mensagem" class=" h-75 rounded" placeholder="Responder.." style="resize: none; padding:10px; width:90%" name="" class="form-control w-50 h-75" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="d-flex w-25 flex-column gap-2 justify-content-center align-items-center">
                        <span id="status" class="text-center">Status Suporte:</span>
                        <select id="select" class="form-control text-center w-75" name="statusSuporte" id="">
                          
                                <option value="{{$data->statusSuporte}}" selected >{{$data->statusSuporte}}</option>
                                <option value="Fechado" >Fechado</option>
                            
                        </select>
                        <button type="submit" class="btn w-75 btn-dark">Responder</button>
                    </div>

                </form>
                <form action="{{route('caixaEntrada.suporte.update', $data->id)}}" method="post"  class="w-25 gap-2 h-100 d-flex flex-column justify-content-center align-items-center" style="width: 15%">
                    @csrf
                    @method('PUT')
                                <input type="hidden" name="statusSuporte" value="Fechado">
                                <span class="fw-bold text-center fs-5">Fechar Suporte sem responder</span>
                                <button class="btn btn-outline-danger">Fechar Suporte</button>
                   

                </form>
                @else
                <div class="d-flex gap-3 flex-column justify-content-center align-items-center">
                    <div class="w-100  h-50 d-flex flex-row justify-content-center align-items-center">
                            <img src="{{URL::asset('images/check.png')}}" class=" "  width="100px">
                            <span class="display-3">Suporte Fechado</span>
                    </div>
                    <form action="{{route('caixaEntrada.suporte.update', $data->id)}}" class="h-50" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="statusSuporte" value="Aberto">
                        <button type="submit" class="btn btn-outline-danger">Reabrir Suporte</button>
                    </form>
                </div>

                @endif
        </section>
    </div>
@endsection


@section('pageTitle')
    Pedido de Suporte
@endsection