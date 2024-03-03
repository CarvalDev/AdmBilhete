@extends('layouts.mainLayout')

@section('title')
    Pedido de Suporte
@endsection

@push('css')
    <link rel="stylesheet" href="{{ URL::asset('css/showCaixaEntrada.css') }}" type="text/css">
    <link href="vc-toggle-switch.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
@endpush


@section('content')
    <div class="w-100 h-100 gap-1 d-flex flex-column justify-content-center align-items-center pe-5">
        <section class="user w-100 h-25 d-flex flex-row justify-content-between align-items-center pb-3">
            <div id="userPlace" class="h-100 d-flex flex-row align-items-center " > 
                {{-- <img src="{{ asset('images/userPadrao.png') }}" alt="">           --}}
                <div class="fotoPassageiro rounded-circle border border-5 border-danger">
                    
                
                        <img 
                         @if ($data->fotoPassageiro == '')
                        src="{{ asset('images/userPadrao.png') }} "

                        @else

                        src="{{ asset("storage/$data->fotoPassageiro")}} "

                        @endif  style="border-radius: 100%; width: 100px; height: 100px; object-fit: cover;" alt="">
                    
                </div>
                
                <div class="dadosPrincipais d-flex flex-column ms-3 mt-4" >
                    <div class="flex-row d-flex gap-2"><p style="color:rgb(52, 49, 49);" class=" fs-4 fw-bold p-0 m-0 text-uppercase">{{ $data->nomePassageiro }}</p></div>
                    <div class="flex-row d-flex gap-2"><p  style="font-size: 12px" class="fw-bold fs-6 text-secondary  p-0 m-0 mb-3 text-center">{{ $data->emailPassageiro }}</p></div>
                </div>
                
            </div>
            <form action="{{route('caixaEntrada.suporte.update', $data->id)}}" method="post">
                @csrf
                @method('PUT')
                <button type="submit" class="align-self-start px-3 bg-transparent" style="border: 0px">
                    <input type="hidden" name="statusSuporte" value="Fechado">
                    <i class="fa-solid fa-circle-xmark text-danger fs-2" data-bs-toggle="tooltip" data-bs-placement="top" title="Fechar sem responder"></i>
                </button>
            </form>

        </section>
        <section class="w-100 d-flex flex-column justify-content-center align-items-center" style="height: 60%">
            <div class="w-100 pb-3 mt-2 d-flex flex-row justify-content-between align-items-center">
                <div class="col-10">
                <span class="me-3 fs-6 fw-semibold text-secondary">{{ $data->dataAcao }}</span>
            </div>
            <div class="col-1 px-2">
                <div class="bg-primary rounded-5 bg-opacity-5 border-primary px-2 py-1 text-light text-capitalize text-center shadow"  >{{ $data->categoriaSuporte }}</div>       
            </div>
            <div class="col-1 px-2">         
                <div @if ($data->statusSuporte == 'Aberto') class="bg-success rounded-5 bg-opacity-5 px-2 py-1 text-light text-capitalize text-center shadow"
                     @else class="bg-danger rounded-5 bg-opacity-5 px-2 py-1 text-light text-capitalize text-center shadow"
                     @endif
                    >{{ $data->statusSuporte }}</div>
            </div>
            </div>
            <div class="w-100 h-100 d-flex flex-column justify-content-between">
                <div class="h-50  pt-2 ms-2" style="width: 92%">
                    <span class=" py-2 texto">
                        {{ $data->descSuporte }}
                    </span>
                </div>
                @if( $data->statusSuporte == 'Aberto')
                <form id="fecharSuporte" action="{{ route('caixaEntrada.mail', [$data->passageiro_id, $data->id]) }}" method="post" class="w-100 col">
                          @csrf
                    <div class="row">
                        <div class="col"></div>
                    <label class="switch col-1" >
                        <input type="checkbox" name="statusSuporte" value="Fechado"  >
                        <span class="slider"></span>
                      </label>

                    </div>

                    <div class="row">
                    <div class="input-field ps-4 col">
                          <input type="text" name="mensagem" placeholder="Responder Atendimento ">
                      </div>
                      <div  class="col-1 d-flex align-items-center"><button type="submit" class="btn px-3 btn-dark rounded-5">Enviar</button></div>
                    </div>
                </form>   
                    @else 
                    <form action="{{route('caixaEntrada.suporte.update', $data->id)}}" method="POST" class="w-100 d-flex  justify-content-center align-items-center">
                        @method('PUT')
                        @csrf
                            <input type="hidden" name="statusSuporte" value="Aberto">
                            <button type="submit" class="bg-success border border-none p-3 rounded-5 text-light shadow ">Reabrir Suporte</button>
                    </form>
                    @endif
 
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
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
          return new bootstrap.Tooltip(tooltipTriggerEl)
        });
      </script>
@endsection


@section('pageTitle')
    Pedido de Suporte
@endsection