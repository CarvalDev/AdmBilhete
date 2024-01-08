@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/catracaForm.css') }}" type="text/css">
@endpush

@section('pageTitle', 'Adicionando Catraca')

@section('title','Adicionando Catraca')

@section('content')
<div class="h-75 w-50 rounded-3 align-items-center justify-content-center d-flex" style="background-color:rgba(46, 50, 51, 0.576)">
  <form class="w-100 w-100 align-items-center gap-3 justify-content-center d-flex flex-column" method="POST" action="#">
    <div class="w-75 d-flex mt-4 flex-row gap-2">
        <label class="fw-bold" style="font-size:20px">Nome da Linha</label>
        <input type="text" required class="form-control" style="border: 1px solid tranparent ; width:60%"></label>
    </div>
    <div class="w-75 d-flex mt-4 flex-row gap-2">
        <label class="fw-bold" style="padding-right: 7.5%;font-size:20px">N° da Linha</label>
        <input type="text" required class="form-control " style="border: 1px solid transparent; width:40%" maxlength="7"></label>
    </div>

    <div class="botões w-100 justify-content-end d-flex gap-2 me-5 align-bottom">
        <a href=" {{ route('catracas.index')}} " class="btn fw-bold" style="background-color:red;color:white;">Voltar</a>
        <button type="submit" class="bg-success border border-0 rounded-3 p-2 fw-bold text-white ">Cadastrar</button>
    </div>
  </form>
</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>

  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
@endsection
