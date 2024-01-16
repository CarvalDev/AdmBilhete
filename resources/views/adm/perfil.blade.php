@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/passageiros.css') }}">

@endpush

@section('title', 'Perfil')

@section('pageTitle', 'Perfil')
@section('content')

<form action="{{route('adm.update', $user->id)}}" style="max-height: 100%" class="w-100 h-100 flex-column d-flex justify-content-center align-items-center" method="post" enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class=" mb-2">
      <strong>INFORMAÇÕES DO ADM</strong>
    </div>
   <div class=" d-flex justify-content-center align-items-center">
            <label for="foto" id="lbFoto">
            <img id="preview"
            @if ($user->fotoAdm == null)
            src="{{ url("images/userAdd.png") }}" name="fotoPassageiro" class="" style="width:158px; border-radius: 25px" alt=""> 
            @else
            src="{{ url("storage/$user->fotoAdm") }}" name="fotoPassageiro" class="" style="width:158px; border-radius: 25px" alt="">
            @endif
            </label>
            <input type="file" id="foto" name="fotoAdm">
    </div>
      
      <div class=" h-75 row  ">
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="nome" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" value="{{$user->nomeAdm}}" name="nomeAdm" maxlength="50" id="nome" value=""
              required>
            <div class="invalid-feedback">
              Nome Inválido
            </div>
          </div>
          <div class="col-md-6">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" value="{{$user->emailAdm}}" name="emailAdm" maxlength="100" value=""
              id="email" required>
            <div class="invalid-feedback">
              E-mail Inválido
            </div>
          </div>  
        </div>
        <div class="row">
         
          <div class="col-md-6">
            <label for="senha" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" name="senhaAdm" value="" maxlength="10"
              id="senha" required>
            <div class="invalid-feedback">
              Senha Inválido
            </div>
          </div>
          <div class="col-md-6">
            <label for="senha" class="col-form-label">Confirme sua Senha:</label>
            <input type="password" class="form-control" name="senhaConf" value="" maxlength="10"
              id="senha" required>
            <div class="invalid-feedback">
              Senha Inválido
            </div>
          </div>
        </div>
        
        <div class="row mt-5 ">
          <div class="col-md-2">
            <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input">
          </div>
          <div class=" text-end  col-md-10">
          <a href="{{ route('home.index') }}" class=" btn btn-primary" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
          <button class="btn btn-primary">Atualizar</button>
        </div>
        </div>

      </div>
    </div>
  </form>
  <div>
    @if ($errors->any())
    <ul class="errors">
        @foreach ($errors->all() as $error)
            <li class="error">{{$error}}</li>
        @endforeach
    </ul>
@endif
    

</div>
<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script> --}}
  <!-- Para usar Mascara  -->
  
  <script src="{{ asset('js/formularioPassageiro.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
@endsection