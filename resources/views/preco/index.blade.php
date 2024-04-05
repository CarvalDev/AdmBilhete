@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/reajuste.css') }}" type="text/css">
@endpush

@section('title','Reajuste')

    
@section('content')
    <div class="w-100 h-100 d-flex flex-column justify-content-around align-items-center  ">
    <div class="d-flex flex-column justify-content-center aling-itens-center mt-3 ">
    <span class="border border-danger rounded-4 p-xl-4 p-lg-3 d-flex flex-column"  style="height: 25vh;width:20vw;">
        <p class="fw-bold text-center mb-xl-3 mt-xl-3 mb-lg-4 mt-lg-4 mb-3 mt-5">Preço atual</p>
        <label class="d-flex flex-row gap-2 w-100 align-items-center justify-content-center">
        <p class="fw-bold text-center d-flex pt-3 ms-4" >R${{number_format($preco->passagemPreco, 2, ',')}}</p>
        <button type="button" class="btn d-flex justify-content-center align-items-center" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-regular fa-pen-to-square fa-xl" ></i></button>
        </label>
        
    </span>
</div>
<div>
    <canvas width="800" id="grafico" ></canvas>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header" style="border-bottom:1px solid gray">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Preço de Reajuste</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form class="" method="POST" action="{{route('preco.store')}}" required>
          @method('POST')
          @csrf
        <div class="modal-body text-center align-items-center justify-content-center d-flex mt-2">
          <input type="text" class="fw-bold fs-5 form-control text-center" name="passagemPreco" placeholder="R${{$preco->passagemPreco}}">
          <input type="hidden" name="meiaPassagemPreco" value="{{$preco->passagemPreco/2}}">
        </div>
        @if($errors->any())
        <ul class="errors">
      @foreach($errors->all() as $error)
      <li class="errors"> {{$error}}</li>
      @endforeach
      </ul>
      @endif
        <div class="modal-footer">
          <a href="{{ route('preco.index') }}" class="btn btn-danger">Cancelar</a>
          <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
    </div>
        @for ($i=0;$i<4;$i++)
            <input type="hidden" value="{{$reajustes[$i]->dataReajuste."#".$reajustes[$i]->passagemPreco}}" name="reajustes">
        @endfor
<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
</script>
    <script src="{{ asset('js/reajuste.js') }}"></script> 
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    @endsection



@section('pageTitle', 'Reajuste do Preço')







