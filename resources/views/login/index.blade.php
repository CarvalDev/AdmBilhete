@extends('layouts.mainLayoutLogin')

@section('title')
    
@section('content')
<div class="row h-100 w-100 m-0 p-0">
    <div class="col-md-6 d-flex justify-content-center align-items-center">
        <div class="border border-black rounded-4 p-5 w-50 h-50">
            <form action="" class="w-100">
                 <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control mb-3">
                <label for="senha" class="form-label ">Senha</label>
                <input type="password" name="senha" class="form-control mb-3" id="senha">
                <input type="checkbox" name="checkbox" id="checkbox">
                <label for="checkbox" class="mb-3 mt-3" >Lembre de mim</label>
                <input type="button" class="fundo fw-bold text-uppercase mt-3 w-100 btn btnCss" value="Enviar">
            </form>
        </div>
    </div>
<div class="col-md-6 d-sm-none d-md-block m-0 p-0">
    <div class="d-none d-md-flex h-100  justify-content-center align-items-center fundo">
        <img src="{{ url('storage/site/logo bilhete 1.png') }}" class="img-fluid " alt="" srcset="">
    </div>
  
    
</div>     
</div>
@endsection