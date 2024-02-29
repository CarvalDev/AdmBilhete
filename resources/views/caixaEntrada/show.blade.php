@extends('layouts.mainLayout')

@section('title')
    Pedido de Suporte
@endsection

@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/showCaixaEntrada.css') }}" type="text/css">
    <link href="vc-toggle-switch.css" rel="stylesheet" />
@endpush


@section('content')
    <div class="w-100 h-100 gap-1 d-flex flex-column justify-content-center align-items-center pe-5">
        <section class="user w-100 h-25 d-flex flex-row justify-content-start align-items-center pb-3">
            <div id="userPlace" class="h-100 d-flex flex-row align-items-center " > 
                {{-- <img src="{{ asset('images/userPadrao.png') }}" alt="">           --}}
                <div class="fotoPassageiro rounded-circle bg-danger">
                    
                
                        <img 
                         @if ($data->fotoPassageiro == '')
                        src="{{ asset('images/userPadrao.png') }} "

                        @else

                        src="{{ asset("storage/$data->fotoPassageiro")}} "

                        @endif  style="border-radius: 100%; width: 150px; height: 150px; object-fit: cover;" alt="">
                    
                </div>
                
                <div class="dadosPrincipais d-flex flex-column ms-3" >
                    <div class="flex-row d-flex gap-2"><p style="color:rgb(52, 49, 49);" class=" fs-4 fw-bold p-0 m-0 text-uppercase">{{ $data->nomePassageiro }}</p></div>
                    <div class="flex-row d-flex gap-2"><p  style="font-size: 12px" class="fw-bold fs-6 text-secondary  p-0 m-0 mb-3 text-center">{{ $data->emailPassageiro }}</p></div>
                </div>
            </div>
        </section>
        <section class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 60%">
            <div class="w-100 pb-3 d-flex flex-row justify-content-between">
                <div class="col-10">
                <span class="me-3 fs-6 fw-semibold text-secondary">{{ $data->dataAcao }}</span>
            </div>
            <div class="col-1 px-2">
                <div class="bg-primary rounded-5 bg-opacity-10 border border-primary px-2 text-primary text-uppercase text-center"  >{{ $data->categoriaSuporte }}</div>       
            </div>
            <div class="col-1 px-2">         
                <div @if ($data->statusSuporte == 'Aberto') class="bg-primary rounded-5 bg-opacity-10 border border-primary px-2 text-primary text-uppercase text-center"
                     @else class"bg-danger rounded-5 bg-opacity-10 border border-danger px-2 text-danger text-uppercase text-center"
                     @endif
                    >{{ $data->statusSuporte }}</div>
            </div>
            </div>
            <div class="w-100 h-100 d-flex flex-column justify-content-between" style="height:90% ">
                <div class="h-50">
                    <span class="w-100 p-2 ">
                        {{ $data->descSuporte }}
                    </span>
                </div>
               
                <form id="fecharSuporte" action="{{ route('caixaEntrada.mail', [$data->passageiro_id, $data->id]) }}" method="post" class="w-100 col">
                          
                    <div class="row">
                        <div class="col"></div>
                    <label class="switch col-1" >
                        <input type="checkbox" name="statusSuporte">
                        <span class="slider"></span>
                      </label>
                    </div>
                    <div class="row">
                    <div class="input-field ps-4 col">
                          <input type="text" name="mensagem" placeholder="Responder Atendimento ">
                      </div>
                      <div  class="col-1 d-flex align-items-center"><button type="submit" class="btn btn-sm px-2 btn-dark rounded-5">Enviar</button></div>
                    </div>
                </form>    
            </div>
            {{-- <div id="duvidaPlace" class="h-100  d-flex flex-column justify-content-center align-items-center" style="width: 60%">
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
            </div> --}}
                
            {{-- @if ($data->statusSuporte == 'Aberto')
                                
            
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

                @endif --}}
        </section>
    </div>
@endsection


@section('pageTitle')
    Pedido de Suporte
@endsection