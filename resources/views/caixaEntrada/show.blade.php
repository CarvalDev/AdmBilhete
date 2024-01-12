@extends('layouts.mainLayout')

@section('title')
    Pedido de Suporte
@endsection


@section('content')
    <div class="w-100 h-100 border d-flex flex-column justify-content-center align-items-center">
        <section class="w-100 h-50 border d-flex flex-row justify-content-center align-items-center">
            <div class="h-100 border  d-flex flex-column justify-content-center align-items-center" style="width: 40%">
                
                <div class="fotoPassageiro" style="height:70%;border-radius:8%;"  >
                    <a href="">
                        <img @if ('' == '')
                        src="{{ url("images/userPadrao.png")}} 
                        @else
                        src="{{ url("images/userPadrao.png")}} 
                        @endif   " class="w-100 h-100" style="border-radius: 8%" alt="">
                    </a>
                </div>
                <div class="dadosPrincipais d-flex flex-column " >
                    <div class="flex-row d-flex gap-2 justify-content-center"><p style="color:rgb(52, 49, 49);" class="fw-bold p-0 m-0">af</p></div>
                    <div class="flex-row d-flex gap-2 justify-content-center"><p  style="font-size: 12px" class="fw-bold text-secondary  p-0 m-0 mb-3 text-center">123123123123</p></div>
                </div>
            </div>
            <div class="h-100 border d-flex flex-column justify-content-center align-items-center" style="width: 60%">
                <div style="height:20%" class="border w-100 d-flex justify-content-start align-items-center">
                    <span class="ms-3 fs-4">Tema da Dúvida: </span>
                </div>
                <div style="height:70%" class="border w-100 d-flex justify-content-center align-items-center">
                    <div style="width: 90%; height:95%" class="border overflow-auto">
                        <span class="w-100"></span>
                    </div>
                </div>
            </div>

        </section>
        <section class="w-100 h-50 border d-flex flex-row justify-content-center align-items-center">
                <form action="" method="post" class="d-flex gap-3 flex-row justify-content-center align-items-center w-100 h-100">
                    <textarea style="resize: none; padding:10px" name="" class="form-control w-50 h-75" id="" cols="30" rows="10"></textarea>
                    <button class="btn btn-outline-primary">Responder</button>

                </form>
        </section>
    </div>
@endsection


@section('pageTitle')
    Pedido de Suporte
@endsection