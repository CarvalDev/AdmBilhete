@extends('layouts.mainLayoutLogin')

@section('title')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/login.css')}}">
@section('content')
<div class="row h-100 w-100 m-0 p-0">
    <div class="col-md-6 col-xs-12 d-flex justify-content-center align-items-center">
        <div class="border border-black rounded-4 w-50 h-50">
            <div class="p-xl-3 p-md-3 p-xxl-5 p-sm-1 p-xs-5 p-lg-4 testeResposivo testeResposivoMenor">
            <form action="{{ route('adm.login') }}" class="w-100" method="POST">
                @csrf
                <label for="email" class="form-label fw-bold text-xs">Email</label>
                <input type="emailAdm" name="emailAdm" id="email" class="form-control mb-xl-3 mb-sm-3">
                <label for="senha" class="form-label fw-bold text-xs ">Senha</label>
                <input type="password" name="password" class="form-control mb-xl-3 mb-sm-3" id="senha">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox" class=" fw-bold text-xs" >Lembre de mim</label>
                <input type="submit" class="fundo fw-bold text-uppercase w-100 btn btnCss mt-xl-3 mt-sm-5" value="Enviar">
                @if (session('erro'))
                    <div class="w-100 mt-2  text-center">
                        <span class="text-danger">{{session('erro')}}</span>
                    </div>
                @endif
            </form>
            </div>
        </div>
    </div>
<div class="col-md-6 col-xs-12 d-sm-none d-md-block m-0 p-0">
    <div class="d-none d-md-flex h-100  justify-content-center align-items-center fundo">
        <img src="{{ url('images/logo bilhete 1.png') }}" class="img-fluid" alt="" srcset="">
    </div>
  
    
</div>     
</div>
@endsection