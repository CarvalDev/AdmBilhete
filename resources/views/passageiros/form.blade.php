@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/passageiros.css') }}">

@endpush
      
@section('title', 'Adicionar Passageiro')

@section('pageTitle', 'Adicionar Passageiro')
@section('content')
<div class="h-100 w-100 ">
    <form class="w-100 h-100 d-flex flex-row pe-5 pt-5 " action="" id="passageiroStore" method="POST"  enctype="multipart/form-data">
    @csrf
        <div class="col-3 d-flex flex-column">
        <div class="h-50 w-100 d-flex justify-content-center align-items-center">          
                <label for="foto" id="lbFoto" >
                    <img id="preview" class="rounded-circle "
                        src="{{ url('images/userPadrao.png') }}" name="fotoPassageiro" style="object-fit: cover; width: 200px; height: 200px;" alt="" >                            
                    </label>
                    <input type="file" id="foto" name="fotoPassageiro"> 
        </div>
        <div class="h-50">
            <div class="input-g m-3 mx-4">
                <input required="" type="text" name="nomePassageiro" id="name" autocomplete="off" class="input w-100">
                <label class="user-label">Nome</label>
            </div>
            <div class="input-g m-3 mx-4">
                <input required="" type="text" name="sobreNomePassageiro" id="lastname" autocomplete="off" class="input w-100">
                <label class="user-label">Sobrenome</label>
            </div>
            <div class="input-g m-3 mx-4">
            <select id="genero" class="input w-100" name="generoPassageiro">
                <option value="M">Masculino</option>
                <option value="F">Feminino</option>
                <option value="O">Outro</option>
            </select>
        </div>
        </div>
    </div>
    <div class="col-9 ">
        <div class="row w-100 h-90">
            <div class="col h-100 flex-column d-flex align-items-center border-start border-2 border-secondary pt-1">
                <div class="input-g m-2 w-100">
                    <label class="user-label2">Data de Nascimento</label>
                    <input required="" type="date" name="dataNascPassageiro" id="dataNasc" autocomplete="off" class="input w-100"> 
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" data-mask="000.000.000-00" class="input w-100" type="text" name="cpfPassageiro" id="cpf">
                    <label class="user-label">Cpf</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off"  class="input w-100" type="email" name="emailPassageiro" id="email">
                    <label class="user-label">Email</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" class="input w-100" autocomplete="off" data-mask="(00)00000-0000" type="text" name="numTelPassageiro" id="telefone">
                    <label class="user-label">Telefone</label>
                </div>
                {{-- <div class="input-g m-2 w-100">
                    <input required="" class="input w-100" autocomplete="off" type="password" name="password" id="password">
                    <label class="user-label">Senha</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" class="input w-100" autocomplete="off" type="password" id="confpassword">
                    <label class="user-label">Confirmar Senha</label>
                </div> --}}
            </div>
            <div class="col h-100 flex-column d-flex align-items-center border-start border-2 border-secondary pt-1">
                <div class="input-g m-2 w-100">
                    <label class="user-label2">Endereço</label>
                    <input required="" class="input w-100" data-mask="00000-000" autocomplete="off" type="text" name="cepPassageiro" id="cep" onblur="pesquisacep(this.value);">
                    <label class="user-label">Cep</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" type="text" name="logrPassageiro" class="input w-100" id="rua">
                    <label class="user-label">Rua</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" type="number" name="numLogrPassageiro" class="input w-100" id="numLgr">
                    <label class="user-label">Num</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" type="text" name="bairroPassageiro" class="input w-100" id="bairro">
                    <label class="user-label">Bairro</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" type="text" id="cidade" name="cidadePassageiro" class="input w-100" id="cidade">
                    <label class="user-label">Cidade</label>
                </div>
                <div class="input-g m-2 w-100">
                    <select id="uf" class="input w-100" name="ufPassageiro">
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
                <div class="w-100  d-flex justify-content-end">
                <button class="btnCadastrar my-3" type="submit">Cadastrar</button>
                </div>
            </div>
        </div>
        
    </div>
</form>
</div>  

    {{-- <form class="row justify-content-around w-100"  id="passageiroStore" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="col-3 d-flex  flex-column gap-4 justify-content-center align-items-center">
            <label for="foto" id="lbFoto">
            <img id="preview"
                src="{{ url('images/userAdd.png') }}" name="fotoPassageiro" style="width:158px; border-radius: 25px" alt="">
            </label>
            <input type="file" id="foto" name="fotoPassageiro">
    </div>
    <div class="col-8 d-flex row  justify-content-center align-items-center"> 
        <div class="col-5 d-flex align-items-center"><input class="form-control" type="text" name="nomePassageiro" id="name"
                placeholder="Nome Completo"></div>
                <div class="col-4 d-flex align-items-center">
                    <input data-mask="000.000.000-00" class="form-control" type="text" name="cpfPassageiro" id="cpf"
                        placeholder="CPF"></div>
        <div class="col-3  d-flex flex-row align-items-center ">
            <label for="genero">Gênero:</label>
            <select id="genero" class="form-control ms-1" name="generoPassageiro">
                <option value="M">M</option>
                <option value="F">F</option>
            </select>
        </div>
        <div class="col-6   d-flex mt-3 justify-content-center align-items-center ">
            <label class="col-4 ms-2 " style="font-size: 14px"  for="dataNasc">Data Nascimento:</label>
            <input type="date" class="form-control " name="dataNascPassageiro" id="data_nascimento">    
        </div>
        <div class="col-4 mt-3">
            <label class="sr-only" for="inlineFormInputGroup">Bairro</label>
            <div class="input-group">
                <div class="input-group-prepend">
                    <div class="input-group-text"><input data-mask="00000-000" id="cep" name="cepPassageiro" type="text" style="width: 100px;background-color:transparent"placeholder="cep" onblur="pesquisacep(this.value);"></div>
                </div>
                <input type="text" name="bairroPassageiro" class="form-control" id="bairro" placeholder="Bairro">
            </div>
        </div>

        <div class="col-2 mt-3">
            
                
                <select id="uf" class="form-control" name="ufPassageiro">
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
        <div class="col-8 mt-3">
            <div class="input-group ">
                <input type="text" class="form-control" id="rua" name="logrPassageiro" placeholder="Logradouro" aria-label="Recipiente para nickname" aria-describedby="basic-addon2">
                <div class="input-group-append">
                  <span class="input-group-text" id="basic-addon2"><input name="numLogrPassageiro" type="text" id="num" style="width: 50px; background-color:transparent"placeholder="N°"></span>
                </div>
              </div>
        </div>
        <div class="d-flex col-4 mt-3 justify-content-center align-items-center">
            
            <div class="">
                <input class="form-control text-center" type="text" name="complementoLogrPassageiro" id="complemento" placeholder="Complemento">
            </div>
            
        </div>
        
        
        <div class="col-6 mt-3"><input class="form-control" data-mask="(00)00000-0000" type="text" name="numTelPassageiro" id="telefone" placeholder="Telefone"></div>
        <div class="col-6 mt-3">  <input class="form-control" type="email" name="emailPassageiro" id="email" placeholder="E-mail"></div> 
        
        
        <div class="col-6 mt-3"><input class="form-control" type="password" name="password" id="telefone" placeholder="Senha"></div>
        <div class="col-6 mt-3">  <input class="form-control" type="password"  placeholder="Confirmar senha"></div> 
    

        <div class="d-flex justify-content-end align-items-end">
            <div class="col-12"><div class="d-flex justify-content-end mt-xl-5 mb-xl-3">
                <button  id="bt-cancelarPassageiro" class="btn btnCss fw-bold" style="">Cancelar</button>
                <button  type="submit" class="btn btnCss fw-bold ms-5 salvarBtn"  style="width: 5vw">Enviar</button>
            </div></div>
        </div>
    </div>
    </form>
{{-- 
    <div>
        @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{$error}}</li>
            @endforeach
        </ul>
    @endif
        

    </div> --}}

<script type="text/javascript" src="http://code.jquery.com/jquery-3.0.0.min.js"></script>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script> --}}
  <!-- Para usar Mascara  -->
  @include('passageiros.ajax.passageiro')   
  <script src="{{ asset('js/formularioPassageiro.js') }}"></script>
  <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
  <script src="{{ asset('js/cep.js') }}"></script>
  <script>
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });
  </script>
@endsection