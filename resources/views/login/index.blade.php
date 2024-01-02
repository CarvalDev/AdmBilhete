@extends('layouts.mainLayoutLogin')

@section('title')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/login.css')}}">
@section('content')
<div class="row h-100 w-100 m-0 p-0">
    <div class="col-md-6 col-xs-12 d-flex justify-content-center align-items-center">
        <div class="border border-black rounded-4 w-50 h-50">
            <div class="p-xl-3 p-md-3 p-xxl-5 p-sm-1 p-xs-5 p-lg-4 testeResposivo testeResposivoMenor">
            <form action="{{ route('home.index') }}" class="w-100">
                @csrf
                <label for="email" class="form-label fw-bold text-xs">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-xl-3 mb-sm-3">
                <label for="senha" class="form-label fw-bold text-xs ">Senha</label>
                <input type="password" name="senha" class="form-control mb-xl-3 mb-sm-3" id="senha">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox" class=" fw-bold text-xs" >Lembre de mim</label>
                <input type="submit" class="fundo fw-bold text-uppercase w-100 btn btnCss mt-xl-3 mt-sm-5" value="Enviar">
            </form>
            </div>
        </div>
    </div>
<div class="col-md-6 col-xs-12 d-sm-none d-md-block m-0 p-0">
    <div class="d-none d-md-flex h-100  justify-content-center align-items-center fundo">
        <img src="{{ url('storage/site/logo bilhete 1.png') }}" class="img-fluid" alt="" srcset="">
    </div>
  
    
</div>     
</div>
@endsection