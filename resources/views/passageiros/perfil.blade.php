@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/perfilPassageiro.css') }}" type="text/css">

@endpush

@section('pageTitle', 'Perfil do Passageiro')

@section('title','Perfil do Passageiro')

@section('content')
<div class="w-100 h-100  d-flex flex-row">
    <div class="infosPassageiro h-100" style="width:70%;"> 
     
        <div class="primeirasInfo d-flex flex-row justify-content-center align-items-end w-100 d-flex flex-row" style="height:45%">
            <div class=" h-100 d-flex flex-column justify-content-around align-items-center" style="width:150%">
            <div class="fotoPassageiro" style="height:70%;border-radius:8%;"  >
                <img @if ($passageiro->fotoPassageiro == '')
                src="{{ url("images/userPadrao.png")}} 
                @else
                src="{{ url("storage/$passageiro->fotoPassageiro")}} 
                @endif   " class="w-100 h-100" style="border-radius: 8%" alt="">
            </div>
            <div class="dadosPrincipais d-flex flex-column ph-4">
                <div class="flex-row d-flex gap-2 justify-content-center"><p style="color:rgb(52, 49, 49);" class="fw-bold p-0 m-0">{{ $passageiro->nomePassageiro }}</p></div>
                <div class="flex-row d-flex gap-2 justify-content-center"><p  style="font-size: 12px" class="fw-bold text-secondary  p-0 m-0 mb-3 text-center">{{ $passageiro->cpfPassageiro }}</p></div>
            </div>
            </div>
            <div class="maisInfo d-flex flex-column px-3  h-100 gap-1 justify-content-center p-2" style="width:120%;border-left:2px solid black;">
              <div class="" style="font-size:13px"><strong>Email</strong><label class="ps-1"> {{ $passageiro->emailPassageiro }} </label></div>
              <div class="" style="font-size:13px"><strong>Estado</strong><label class="ps-1 text-uppercase"> {{ $passageiro->ufPassageiro}} </label></div>
              <div class="" style="font-size:13px"><strong>Num. Tel.</strong><label class="ps-1"> {{ $passageiro->numTelPassageiro }} </label></div>
              <div class="" style="font-size:13px"><strong>Data Nasc.</strong><label class="ps-1"> {{ $linhaNasc }} </label></div>
              
            </div>
            <div class="d-flex justify-content-end align-items-center py-1 align-end container" >    
              <a href="{{ route('passageiros.addBilhete', $passageiro->id) }}" class="border-0"><i class="fas fa-plus-circle fa-2x" aria-hidden="true"></i></a>
          </div>
        </div>
        
        <div class="bilhetes align-items-start justify-content-center d-flex flex-column" style="height: 55%;width:100%;background-color:rgba(128, 128, 128, 0.588)">
            @if (count($bilhetes)>0)
            <div id="carouselExample" class="carousel slide w-100">
                <div class="carousel-inner w-100 h-100">
                    @for ($i=0;$i<$bilhetes->count();$i++)
                    <input type="hidden" value="{{ $bilhetesPassagens[$i] }}" id="numero">
                  <div class="carousel-item active w-100 h-100" onclick="imprime({{$bilhetesPassagens[$i]}}, {{$bilhetes[$i]->id}})">
                    <a href="#" class="btn text-decoration-none w-100 h-100" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <div class="d-flex w-100 h-100 align-items-center justify-content-center">
                        <div class="rounded-4" style="height: 90%;width:56%;background-color:@if($bilhetes[$i]->tipoBilhete == 'Comum') #808075 @elseif ($bilhetes[$i]->tipoBilhete == 'Estudante') #4390E1 @elseif ($bilhetes[$i]->tipoBilhete == 'Idoso') #FFDB70 @elseif ($bilhetes[$i]->tipoBilhete == 'Pcd') #DDA0DD  @elseif ($bilhetes[$i]->tipoBilhete == 'Gestante') #FFA500 @elseif ($bilhetes[$i]->tipoBilhete == 'Obesa') #FFA500 @elseif ($bilhetes[$i]->tipoBilhete == 'Obesa') #FFA500 @else #98FB98   @endif ">
                            <header class="w-100  d-flex flex-row justify-content-between" style="height:21%">
                                <div class="dNe h-100 d-flex align-items-center justify-content-center" style="width:35%">
                                    <img src=" {{ url('images/DNElogo.png')}} " style="width: 85%;height:80%">
                                </div>
                                <div class="logos h-100  d-flex justify-content-center align-items-center gap-3" style="width:65%">
                                    <img src=" {{ url('images/UNElogo.png')}} " style="width: 12%;height:66%">
                                    <img src=" {{ url('images/UBESlogo.png')}} " style="width: 12%;height:66%">
                                    <img src=" {{ url('images/ANPGlogo.png')}} " style="width: 21%;height:44%">
                                    <img src=" {{ url('images/UEElogo.png')}} " style="width: 12%;height:66%">
                                    <img src=" {{ url('images/UMESlogo.jpg')}} " style="width: 12%;height:66%">
                                </div>
                            </header>
            
                            <section class="corpoBilhete w-100  d-flex flex-row" style="height:55%">
                                    <div class="fotoDonoBilhete  h-100" style="width:30%;margin-left:3%">
                                        <img src=" {{ url('images/iconFotoBilhete.jpg')}}" class="h-100 w-100">
                                    </div>
            
                                    <div class="infosBilhete justify-content-center text-start gap-1 h-100 d-flex flex-column p-2 px-3" style="width:70%">
                                      <div class="" style="font-size:13px"><strong>Tipo Bilhete</strong><label class="ps-1"> {{ $bilhetes[$i]->tipoBilhete }} </label></div>
                                        <div class="" style="font-size:13px"><strong>Status</strong><label class="ps-1">{{ $bilhetes[$i]->statusBilhete }}</label></div>
                                        <div class="" style="font-size:13px"><strong>Gratuidade</strong><label class="ps-1">@if($bilhetes[$i]->gratuidadeBilhete == 1) Sim @else Não @endif </label></div>
                                        <div class="" style="font-size:13px"><strong>Meia Passagem</strong><label class="ps-1"> @if ($bilhetes[$i]->meiaPassagensBilhete == 1) Sim @else Não @endif</label></div>
                                    </div>
                            </section>
                            
                            <footer class="rodapeBilhete w-100 d-flex flex-row" style="height: 24%">
                                <div class="QRCode  h-100 alig-items-center justify-content-center d-flex" style="width:25%;margin-left:3%">
                                 
                                </div>
                                <div class="codUsoBilhete h-100 p-2 d-flex flex-row gap-5 h-100" style="width:75%">
                                    <div class="" style="width: 70%">
                                        <label style="font-size:11px">Código de uso/N° do Bilhete Único</label>
                                        <p class="fw-bold" style="padding-left:47%;font-size:12px">{{ $bilhetes[$i]->numBilhete }}</p>
                                    </div>
            
                                    <div class="logo2023 d-flex justify-content-center align-items-center h-100" style="width:30%">
                                        <img src=" {{ url('images/anoBilhete.png')}} " style="width: 110%;height:170%">
                                    </div>
                                </div>
                            </footer>
                    
                        </div>
                    </div>
                  </a>
                  </div>
                  @endfor
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div> 
            @else 
            <p class="text-danger text-center">Você ainda não possui bilhetes</p>
            @endif
        </div>
    </div>

    <div class="historicoRecarga h-100 py-5 overflow-y-auto" style="background-color: red;width:30%;border-top-left-radius: 80px 80px;" >
      <div class="todasInfo w-100 h-100 d-flex align-items-center flex-column text-white">
        <div class="titulo d-flex justify-content-center w-100 flex-row">   
            <h5 class="fw-bold text-white p-3 text-center">HISTÓRICO DE AÇÕES</h5>
        </div>
        <table style="width: 90%">
            <tr class="" style="border-bottom:1.5px solid white">
                <th class="text-center" style="width:15%">ID</th>
                <th class="text-center py-3" style="width:40%">Tipo de Ação</th>
                <th class="text-center" style="width:50%">Data da Ação</th>
            </tr>
            @foreach ($acoes as $acao)
            <tr>
                <td class="text-center py-3" style="width:15%">{{ $acao->id }}</td>
                <td class="text-center py-3" style="width:40%">{{ $acao->tipoAcao }}</td>
                <td class="text-center" style="width:50%">{{ $acao->dataAcao }}</td>
                
            </tr>
            @endforeach
           
        </table>
      </div>
    </div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content" id="primeira">
        <div class="modal-header" style="border-bottom:1px solid gray">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Quantidade Total de Passagens</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center align-items-center justify-content-center d-flex mt-2">
          <p class="fw-bold fs-5" id="numPassagem"></p>
          <input type="hidden" class="btn" id="idBilhete" name="idBilhete">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" id="removeBtn" onclick="remover()">Remover Passagem</button>
          <button type="button" class="btn btn-primary" id="adicionaBtn" onclick="adicionar()">Adicionar Passagem</button>
        </div>
      </div>

      <form class="modal-content" action=" {{ route('passageiro.passagens.store') }} " method="POST" style="display:none" id="adiciona">
        @csrf
        <div class="modal-header" style="border-bottom:1px solid gray">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Adicionar Passagens</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center align-items-center justify-content-center d-flex flex-row gap-3 mt-2">
          <p class="fw-bold fs-5 mt-3" id="numPassagemA"></p>
          <span class="rounded-circle p-2 px-3 border border-dark " style="background-color: bisque" onclick="plusNumero()"><i class="fa-solid fa-plus"></i></span>
          <input type="hidden" class="btn" name="qtdPassagemAdiciona" id="inputAdiciona">
          <input type="hidden" class="btn" name="qtdPassagemAnterior" id="qtdPassagemAnterior">
          <input type="hidden" class="btn" id="idBilheteAdd" name="idBilhete">
        </div>
        <div class="modal-footer"> 
          <button type="button" class="btn btn-danger" onclick="voltar()">Voltar</button>
          <button type="submit" class="btn btn-primary">Adicionar</button>
        </div>
      </form>

      <form class="modal-content" action="" style="display:none" id="remove">
        @csrf
        @method('PUT')
        <div class="modal-header" style="border-bottom:1px solid gray">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Remover Passagens</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center align-items-center justify-content-center border border-dark gap-3 d-flex flex-row mt-2">
          <p class="fw-bold fs-5 mt-3" id="numPassagemR"></p>
          <span class="rounded-circle p-2 px-3 border border-dark " style="background-color: bisque" onclick="minusNumero()"><i class="fa-solid fa-minus"></i></span>
          <input type="hidden" class="btn" name="qtdPassagemRemove" id="inputRemove">
          <input type="hidden" class="btn" name="qtdPassagemAnterior" id="qtdPassagemAnterior2">
          <input type="hidden" class="btn" id="idBilheteRemove" name="idBilhete">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" onclick="voltar()">Voltar</button>
          <button type="submit" class="btn btn-primary">Remover</button>
        </div>
      </form>
    </div>
  </div>
<script src=" {{ URL::asset('js/verificaPassagem.js')}} "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

@endsection
