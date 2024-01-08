@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/register.css') }}">

@endpush

@section('title', 'Adicionar Passageiro')

@section('pageTitle', 'Adicionar Passageiro')
@section('content')
<div class="h-100 w-100">
    <div class="d-flex justify-content-between px-2 py-2 ">
        
        
    </div>
    <hr style="border: 0.1px solid gray" class="my-3">
    
    <form class="row w-100" action="{{ route('passageiros.store') }}"  style="" method="POST" action="" enctype="multipart/form-data">
        @csrf
        <div class="col-4 d-flex  flex-column gap-4 justify-content-center align-items-center">
            <label for="foto" id="lbFoto">
                <img id="preview"
                src="{{ url('images/userAdd.png') }}" name="fotoPassageiro" style="width:158px; border-radius: 25px" alt="">
            </label>
            <input type="file" id="foto" name="fotoPassageiro">
        </div>
        <div class="col-3 d-flex align-items-center"><input class="form-control" type="text" name="nomePassageiro" id="name"
            placeholder="Nome Completo"></div>
            
            <div class="col-2  d-flex flex-row align-items-center justify-content-center ">
                
                <select id="genero" class="form-control ms-1 w-50" name="generoPassageiro" placeholder="Genero">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select>
            </div>
            
            <div class="col-3 d-flex align-items-center"><input data-mask="000.000.000-00" class="form-control" type="text" name="cpfPassageiro" id="cpf"
                placeholder="CPF"></div>
                <div class="col-4   d-flex mt-3 justify-content-center align-items-center ">
                    <input type="date" class="form-control w-50" name="dataNascPassageiro" id="data_nascimento">    
                </div>
                <div class="col-3 mt-3">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><input data-mask="00000-000" id="cep" name="cepPassageiro" type="text" class="form-control" style="width: 100px;background-color:transparent"placeholder="cep"></div>
                        </div>
                        <input type="text" name="bairroPassageiro" class="form-control w-50" id="inlineFormInputGroup" placeholder="Bairro">
                    </div>
                </div>
                <div class="col-2 mt-3 d-flex  align-items-center justify-content-center">
                    
                    
                    <select id="uf" class="form-control w-50" name="ufPassageiro">
                        <option value="UF">UF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="SP">SP</option>
                    </select>
                </div>
                
                <div class="col-3 mt-3">
                <div class="input-group ">
                    <input type="text" class="form-control" name="logrPassageiro" placeholder="Logradouro" aria-label="Recipiente para nickname" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon2"><input name="numLogrPassageiro" type="text" id="num" class="form-control" style="width: 50px; background-color:transparent"placeholder="N°"></span>
                    </div>
                </div>
            </div>
            
            <div class="d-flex col-12 mt-3 justify-content-end align-items-center">
                
                <div class=" justify-content-end align-items-end" style="width: 58.5vw">
                    <input class="form-control text-center" type="text" name="complementoLogrPassageiro" id="complemento" placeholder="Complemento">
                </div>
                
            </div>
            
            <div class="d-flex col-12 mt-3 justify-content-end align-items-center">
                <div class="col-6 d-flex justify-content-end mt-3"><input class="form-control w-50" data-mask="(00)00000-0000" type="text" name="numTelPassageiro" id="telefone" placeholder="Telefone"></div>
                <div class="col-5 justify-content-end d-flex mt-3">  <input class="form-control w-50" type="email" name="emailPassageiro" id="email" placeholder="E-mail"></div> 
            </div>
            <div class="d-flex col-12 mt-3 justify-content-end align-items-center">
                <div class="col-6 d-flex justify-content-end mt-3"><input class="form-control w-50" type="password" name="senhaPassageiro" id="telefone" placeholder="Senha"></div>
                <div class="col-5 justify-content-end d-flex mt-3">  <input class="form-control w-50" type="password"  placeholder="Confirmar senha"></div> 
            </div>
            <div class="d-flex justify-content-end align-items-end">
                <div class="col-12"><div class="d-flex justify-content-end mt-xl-5 mb-xl-3">
                    <button  id="bt-cancelarPassageiro" class="btn btnFormulario fw-bold" style="">Cancelar</button>
                    <button  type="submit" class="btn btnFormulario fw-bold ms-5"  style="width: 5vw">Enviar</button>
                </div></div>
            </div>
            <hr style="border: 0.1px solid gray" class="my-3">
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
    
    
    
</div>
</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>
  <!-- Para usar Mascara  -->
  
  <script src="{{ asset('js/formularioPassageiro.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
@endsection