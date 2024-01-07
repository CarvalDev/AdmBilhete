@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/perfilPassageiro.css') }}" type="text/css">
@endpush

@section('pageTitle', 'Perfil do Passageiro')

@section('title','Perfil do Passageiro')

@section('content')
<div class="w-100 h-100  d-flex flex-row">
    <div class="infosPassageiro h-100" style="width:70%">
        <div class="primeirasInfo ml-5  d-flex flex-column justify-content-center align-items-center w-50 d-flex flex-row" style="height:45%">
            <div class="fotoPassageiro" style="height:70%; border: 2px solid gray; border-radius:8%"  >
                <img src="{{ url("storage/$passageiro->fotoPassageiro") }}" class="w-100 h-100" style="border-radius: 8%" alt="">
            </div>
            <div class="dadosPrincipais d-flex flex-column ph-4">
                <div class="flex-row d-flex gap-2 justify-content-center"><p style="color:rgb(52, 49, 49);" class="fw-bold p-0 m-0">{{ $passageiro->nomePassageiro }}</p></div>
                <div class="flex-row d-flex gap-2 justify-content-center"><p  style="font-size: 12px" class="fw-bold text-secondary  p-0 m-0 mb-3 text-center">{{ $passageiro->cpfPassageiro }}</p></div>
            </div>
        </div>

        <div class="bilhetes w-100  align-items-center justify-content-center  d-flex flex-column" style="height: 55%">
            <div class="rounded-4" style="height: 95%;width:60%;background-color:#1E90FF">
                <header class="w-100  d-flex flex-row justify-content-between" style="height:21%">
                    <div class="dNe h-100 d-flex align-items-center justify-content-center" style="width:35%">
                        <img src=" {{ url('images/DNElogo.png')}} " style="width: 85%;height:80%">
                    </div>
                    <div class="logos h-100  d-flex justify-content-center align-items-center gap-3" style="width:65%">
                        <img src=" {{ url('images/UNElogo.png')}} " style="width: 13%;height:70%">
                        <img src=" {{ url('images/UBESlogo.png')}} " style="width: 13%;height:70%">
                        <img src=" {{ url('images/ANPGlogo.png')}} " style="width: 22%;height:48%">
                        <img src=" {{ url('images/UEElogo.png')}} " style="width: 13%;height:70%">
                        <img src=" {{ url('images/UMESlogo.jpg')}} " style="width: 13%;height:70%">
                    </div>
                </header>

                <section class="corpoBilhete w-100  d-flex flex-row" style="height:55%">
                        <div class="fotoDonoBilhete  h-100" style="width:30%;margin-left:3%">
                            <img src=" {{ url('images/iconFotoBilhete.jpg')}}" class="h-100 w-100">
                        </div>

                        <div class="infosBilhete justify-content-center gap-1 h-100 d-flex flex-column p-2 px-3" style="width:70%">
                            <strong style="font-size:13px">{{ $passageiro->nomePassageiro }}</strong>
                            <label style="font-size:13px">ESCOLA TÉCNICA ESTADUAL DE GUAIANAZES</label>
                            <label style="font-size:13px">TÉCNICO</label>
                            <div class="" style="font-size:13px"><strong>CPF</strong><label class="ps-1">{{ $passageiro->cpfPassageiro }}</label></div>
                            <div class="" style="font-size:13px"><strong>Data Nasc.</strong><label class="ps-1">{{ $passageiro->dataNascPassageiro }}</label></div>
                            <div class="" style="font-size:13px"><strong>Matrícula</strong><label class="ps-1">012345789</label></div>
                        </div>
                </section>
                
                <footer class="rodapeBilhete w-100 d-flex flex-row" style="height: 24%">
                    <div class="QRCode  h-100 alig-items-center justify-content-center d-flex" style="width:25%;margin-left:3%">
                     
                    </div>
                    <div class="codUsoBilhete h-100 p-2 px-4 d-flex flex-row gap-5 h-100" style="width:75%">
                        <div class="" style="width: 70%">
                            <label style="font-size:12px">Código de uso/N° do Bilhete Único</label>
                            <p class="fw-bold" style="padding-left:47%;font-size:13px">1 234 567 890</p>
                        </div>

                        <div class="logo2023 d-flex justify-content-center align-items-center h-100" style="width:30%">
                            <img src=" {{ url('images/anoBilhete.png')}} " style="width: 110%;height:170%">
                        </div>
                    </div>
                </footer>
        
            </div>
        </div>
    </div>

    <div class="historicoRecarga h-100 py-5" style="background-color: red;width:30%;border-top-left-radius: 80px 80px;" >
      <div class="todasInfo w-100 h-100 d-flex align-items-center flex-column text-white">
        <div class="titulo d-flex justify-content-center w-100 flex-row">   
            
            <h5 class="fw-bold text-white p-3 text-center">HISTÓRICO DE RECARGAS</h5>
            <button class="border-0 btn"><i class="fas fa-plus-circle fa-2x text-white mb-2" aria-hidden="true"></i></a></button>
        </div>
        <table style="width: 90%">
            <tr class="" style="border-bottom:1.5px solid white">
                <th class="text-center py-3" style="width:35%">Cartão</th>
                <th class="text-center" style="width:30%">Quantidade</th>
                <th class="text-center" style="width: 35%">Data</th>
            </tr>
            <tr>
                <td class="text-center py-3" style="width:35%">Bilhete unico comum</td>
                <td class="text-center" style="width:30%">15</td>
                <td class="text-center" style="width: 35%">25/10/2023</td>
            </tr>
        </table>
      </div>
    </div>
</div>
<script src="{{ asset('js/reajuste.js') }}"></script> 
    <script src="{{ URL::asset('js/modalCatraca.js') }}"></script>
    @include('components.modalRecarga')

@endsection
