@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/perfilPassageiro.css') }}" type="text/css">

@endpush

@section('pageTitle', 'Perfil do Passageiro')

@section('title','Perfil do Passageiro')

@section('content')
<div class="w-100 h-100 d-flex flex-row pe-5 pt-5">
  <div class="col-3 pe-5">
    <div class="row h-50">
      <div class="fotoPassageiro p-5">
        <img @if ($passageiro->fotoPassageiro == '')
        src="{{ url("images/userPadrao.png")}} "
        @else
        src="{{ url("storage/$passageiro->fotoPassageiro")}} "
        @endif  class="w-100 h-100 border border-5 border-danger rounded-circle"  style="object-fit: cover; width:250px; height:250px;">
    </div>
    </div>
    <div class="row h-50 ">
      <span style="color:rgb(52, 49, 49);" class="text-center fs-5 fw-bold  text-uppercase">
      {{ $passageiro->nomePassageiro }}
    </span>
    <div class="totalAcoes mt-3 w-100 h-50 gap-3 justify-content-center " style="border-top: 2px solid black">
      <table class=" justify-content-center mt-3 w-100 d-flex flex-column h-100">
        <tbody class="d-flex flex-column gap-3 w-100">
          <tr class="w-100 d-flex flex-row justify-content-between"><th class="w-50">Compras</th> <td class="w-50 d-flex justify-content-end">{{ $acoesCompra }}</td></tr>
          <tr class="w-100 d-flex flex-row justify-content-between"><th class="w-50">Consumos</th> <td class="w-50 d-flex justify-content-end">{{ $passagensInativas }}</td></tr>
          <tr class="w-100 d-flex flex-row justify-content-between"><th class="w-50">Suportes</th> <td class="w-50 d-flex justify-content-end">{{ $totalSuporte }}</td></tr>
        </tbody>
      </table>
    </div>
    </div>
  </div>
  <div class="col-9">
    <nav>
      <div class="nav nav-tabs row" id="nav-tab" role="tablist">
        <button class="col nav-link text-dark active" id="nav-dados-tab" data-bs-toggle="tab" data-bs-target="#nav-dados" type="button" role="tab" aria-controls="nav-dados" aria-selected="true">Dados</button>
        <button class="col nav-link text-dark" id="nav-bilhete-tab" data-bs-toggle="tab" data-bs-target="#nav-bilhete" type="button" role="tab" aria-controls="nav-bilhete" aria-selected="false">Bilhetes</button>
        <button class="col nav-link text-dark" id="nav-historico-tab" data-bs-toggle="tab" data-bs-target="#nav-historico" type="button" role="tab" aria-controls="nav-historico" aria-selected="false">Histórico</button>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-dados" role="tabpanel" aria-labelledby="nav-dados-tab">
        <ul class="list-group pt-3">
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">CPF:</span>
              <span class="desc-dados">{{ $passageiro->cpfPassageiro}}</span>
          </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">EMAIL:</span>
              <span class="desc-dados">{{ $passageiro->emailPassageiro }}</span>
          </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">DATA NASC:</span>
              <span class="desc-dados">{{ $passageiro->dataNascPassageiro }}</span>
          </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">ESTADO:</span>
              <span class="desc-dados text-uppercase">{{ $passageiro->ufPassageiro}}</span>
            </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">CIDADE:</span>
              <span class="desc-dados"></span>
            </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">BAIRRO:</span>
              <span class="desc-dados">{{ $passageiro->bairroPassageiro }}</span>
            </li>
          <li class="list-group-item d-flex flex-row justify-content-between"><span class="title-dados">CEP:</span>
              <span class="desc-dados">{{ $passageiro->cepPassageiro }}</span>
          </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">LOGRADOURO:</span>
              <span class="desc-dados">{{ $passageiro->logrPassageiro }}</span>
          </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">NUMERO:</span>
              <span class="desc-dados">{{ $passageiro->numLogrPassageiro }}</span>
            </li>
          <li class="list-group-item d-flex flex-row justify-content-between">
            <span class="title-dados">TEL:</span>
              <span class="desc-dados">{{ $passageiro->numTelPassageiro }}</span>
          </li>
        </ul>
      </div>
      {{-- href="{{ route('passageiros.addBilhete', $passageiro->id) }}" --}}
      <div class="tab-pane fade p-5 pt-1" id="nav-bilhete" role="tabpanel" aria-labelledby="nav-bilhete-tab">  
        <div class="d-flex justify-content-end align-items-center py-1 align-end container" >    
          <button onclick="ativaModalAddBilhete()" class="border-0 "><i class="fas fa-plus-circle fa-2x text-success" aria-hidden="true" data-bs-toggle="exampleModal" data-bs-placement="left" title="Adicionar Bilhete"></i></button>
        </div>
          @if (count($bilhetes)>0)
          <div class="bilhetes row w-100 d-flex justify-content-end">
          @foreach ($bilhetes as $bilhete)
          <div class="menudropdown">
            <input type="hidden" value="{{ $bilhete->id }}" id="numero">
            <button  class="btndropdown w-100 text-decoration-none flex-row text-dark fw-bold fs-3 justify-content-between d-flex">
              <span class="">{{ $bilhete->tipoBilhete }} - {{ $bilhete->numBilhete }}</span>
              <span ><i class="fa-solid fa-arrow-down"></i></span>
            </button>

            <div class="menudropdown-conteudo" id="infoBilhete">
              <input type="hidden" value="{{ $bilhete->id }}" id="idCerto">
              <div class="">
                <p class="gap-2 d-flex"><span class="fw-bold">Passagens:</span>{{ $bilhete->qtdPassagem }}</p>
                <p class="gap-2 d-flex"><span class="fw-bold">Integração:</span>{{ $bilhete->statusBilhete }}</p>
                <p class="gap-2 d-flex"><span class="fw-bold">Status:</span>{{ $bilhete->statusBilhete }}</p>
              </div>
            </div> 
          </div>
        @endforeach
      </div>
        @else <p>Não Possui Bilhetes</p>
        
        @endif
     
      </div>
      <div class="tab-pane fade" id="nav-historico" role="tabpanel" aria-labelledby="nav-historico-tab">
        <div class="historico row w-100 d-flex justify-content-center">
          <div class="pt-2">
            @foreach ($acoes as $acao)
            <div class="row w-100 border-bottom border-2 border-secondary" style="height:80px">
              <div class="col-1 d-flex justify-content-center align-items-center">
                <img @if ($acao->tipoAcao == 'Consumo') src="{{ url("images/qrcode1.png")}}"
                      @else src=" {{ url("images/cart1.png")}}"
                      @endif style="width:50px;"
                  >   
              </div>
              <div class="col-9 d-flex flex-column justify-content-center align-items-start">
                <div class="row ms-3">
                  @if ($acao->tipoAcao == 'Consumo') <span class="tipoConsumo">passagem em qrcode</span>
                  @else <span class="tipoConsumo">compra de passagem</span>
                  @endif       
                </div>
                <div class="row ms-3">
                  @if ($acao->tipoAcao == 'Consumo') <span class="tipoConsumo2">Terminal usado</span>
                  @else <span class="tipoConsumo2">Quantidade</span>
                  @endif
                </div>
              </div>
              <div class="col-2 d-flex justify-content-end align-items-center">
                <span class="text-secondary">
                {{ $acao->dataAcao }}
              </span>
              </div>
          </div>
            @endforeach
        </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    // Adiciona um ouvinte de evento quando a página é carregada
    document.addEventListener('DOMContentLoaded', function () {
      // Encontrar a lista de abas
      var myTab = new bootstrap.Tab(document.getElementById('home-tab'));
  
      // Ativar a primeira aba
      myTab.show();
    });
  </script>
  
 <div class="" id="modal">
  <div class="w-100 d-flex justify-content-between flex-row d-flex p-2 align-items-center" style="border-bottom: 3px solid rgb(243, 160, 174)">
    <h4 class="fw-bold pt-2">Adicionar Bilhete</h4>
    <button id="botaoAtiva" onclick="ativaModalAddBilhete()"><i class="fa-solid fa-circle-xmark"></i></button>
  </div>
  <div class="">
    <form class="w-100 p-4 d-flex gap-3 justify-content-center flex-column align-items-center" action="{{ route('passageiros.bilhetes.store', $passageiro->id) }}"  style="" method="POST">
      @csrf
      <img src="{{ url('images/comum.png') }}" style="width:250px;height:150px"/>
    <div class="w-100 justify-content-center d-flex flex-column align-items-center gap-3 ">
      <select id="tipoBilhete" class="card fw-bold" name="tipoBilhete">
          <option value="Estudante">Estudante</option>
          <option value="Idoso">Idoso</option>
          <option value="Professor">Professor</option>
          <option value="Comum">Comum</option>
          <option value="Pcd">Pessoa com Deficiência</option>
          <option value="Obesa">Pessoa Obesa</option>
          <option value="Gestante">Gestante</option>
          <option value="Corporativo">Corporativo</option>
      </select>

      <select id="status" class="card fw-bold" name="status">
        <option value="Ativo">Ativo</option>
        <option value="Inativo">Inativo</option>
    </select>
    <button type="submit" id="adiciona">
      <h5 class="fw-bold">Adicionar</h5>
    </button>
  </div>
  </form>
  </div>
</div>
  
<script src=" {{ URL::asset('js/verificaPassagem.js')}} "></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
<script>
  var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
  var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
  });
</script>
@endsection