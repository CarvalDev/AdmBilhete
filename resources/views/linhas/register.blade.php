@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">

@endpush

@section('title', 'Informações da Linha')

@section('pageTitle', 'Informações da Linha')
@section('content')
<div class="h-100 w-100">
    <hr style="border: 0.1px solid gray" class="my-3">
    <div class="w-100 d-flex align-items-center justify-content-center " style="height: 60vh">

        <form action="{{ route('linhas.store') }}" class="w-100 form-group" method="POST">
        @csrf 
        <div class="container border border-1   p-0 border-dark rounded-5 w-50" style="height: 35vh">
            <div class="w-100 rounded-top-5 m-0  px-3" style="height: 17%; background-color:red">
                <span  class="fs-4 fw-bold text-light text-start">Adicionar Linhas</span>
            </div>
            <div class="row d-flex justify-content-center align-items-center p-3" style="height: 65%">
                    <div class="col-4 p-4"><input   name="nomeLinha" type="text" placeholder="Nome" class="form-control inputFormulario"></div>
                    <div class="col-4 p-4"><input data-mask="0000-00"  name="numLinha" type="text" placeholder="N°" class="form-control inputFormulario"></div>
                    <div class="col-4 p-4"><input data-mask="000"  name="qtdCarroLinha" type="text" placeholder="Quantidade de Carros" class="form-control inputFormulario"></div>
                </div>
                <div class="d-flex justify-content-end align-items-end">
                    <div class="col-12"><div class="d-flex justify-content-end ">
                        <a href="{{ route('linhas.index') }}" id="bt-cancelarPassageiro" class="btn btnFormulario fw-bold" style="">Cancelar</a>
                        <button  type="submit" class="btn btnFormulario fw-bold  mx-3"  style="width: 5vw">Enviar</button>
                    </div></div>
                </div>
            </div>
            
        </form>
    </div>
    @if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{$error}}</li>
        @endforeach
    </ul>
@endif
</div>
    
<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  
  <script src="{{ asset('js/formularioPassageiro.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
@endsection