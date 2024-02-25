@extends('layouts.mainLayoutLogin')

@section('title')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/login.css')}}">
@section('content')
<div class="card">
    <form action=" {{ route('adm.login') }}" class="form" method="POST">
        @csrf
      <h3>Login</h3>
      <div class="input-field">
        <i class="fa-solid fa-envelope"></i>
          <input type="text" name="emailAdm" placeholder="Enter your email">
      </div>
      <div class="input-field">
        <i class="fa fa-lock"></i>
        <input type="password" name="password" placeholder="Enter your password">
    </div>
    @if (session('erro'))
    <div class="w-100 fw-bold p-3">
        <span class="text-danger">{{session('erro')}}</span>
    </div>
@endif
    <div class="p-3"></div>
    <button type="submit">Entrar</button>
    <p>Não tem conta? <a href="#">KKKKKKKK</a></p>
</form>
    <div class="image">
      <div class="overlay">
        <img src="{{ URL::asset('images/logobranca.png') }}" id="imagemB">
      </div>
    </div> 
  </div>
   
@endsection