@extends('layouts.mainLayout')

@push('css')
<link rel="stylesheet" href="{{ URL::asset('css/passageiros.css') }}">

@endpush
      
@section('title', 'Adicionar Passageiro')

@section('pageTitle', 'Adicionar Passageiro')
@section('content')
<div class="h-100 w-100 ">
     <form class="w-100 h-100 d-flex flex-row" action="" id="passageiroStore" method="POST"  enctype="multipart/form-data">
    @csrf
    <div class="col-3 d-flex flex-column">
    <div class="h-100 w-100 d-flex justify-content-center align-items-center flex-column gap-5">
                <label for="foto" id="lbFoto" class="position-relative">
                    <img id="preview" class="rounded-circle" 
                         src="{{ url('images/userPadrao.png') }}" name="fotoPassageiro"
                         style="object-fit: cover; width: 250px; height: 250px; border: 5px solid red" alt="adicionar foto"/>
                    <div class="rounded-circle position-absolute" style="width: 50px; height: 50px; right: 20px; bottom: 0; background-color: #e70000">
                        <span class="text-white d-flex justify-content-center align-items-center fs-2 fw-bold" style="width: 100%; height: 100%;">+</span>
                    </div>
                </label>
                <input type="file" id="foto" name="fotoPassageiro" style="display: none;">
                <span class="text-center fs-4 fw-semibold">FOTO DO PASSAGEIRO</span>
            </div>            
    </div>

    <div class="col-9 py-4">
        <div class="container-fluid w-100 h-100 d-flex flex-column overflow-y-auto" style="border-left: 1px solid black">
            <div class="input-group gap-5 w-100 flex-row justify-content-center d-flex" style="height: 13%">
                <input class="fs-4 h-100 ps-3" style="border-bottom: 2px solid gray !important; width:47%;outline:none;border:none" required="" type="text" placeholder="Nome" name="nomePassageiro" id="name" autocomplete="off">
                <input class="fs-4 h-100 ps-3" style="border-bottom: 2px solid gray !important; width:47%;outline:none;border:none" required="" type="text" placeholder="Sobrenome" name="sobreNomePassageiro" id="lastname" autocomplete="off">
                
            </div>

            <div class="input-group 2 w-100 gap-3 px-2" style="height: 87%">
                <input class="w-100 mt-3 fs-5 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;outline:none;border:none;color:gray" required="" type="date" placeholder="Nome" name="dataNascPassageiro" id="dataNasc" autocomplete="off">
                <select id="genero" class="input w-100 fs-4 ps-3" name="generoPassageiro" style="outline:none;border:none;border-bottom: 2px solid gray !important;height: 13%">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
                <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="text" data-mask="000.000.000-00" placeholder="Cpf" name="cpfPassageiro" id="cpf" autocomplete="off">
                <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="email" placeholder="Email"  name="emailPassageiro" id="email" autocomplete="off">
                <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="text" data-mask="(00)00000-0000" placeholder="Telefone" name="numTelPassageiro" id="telefone" autocomplete="off">
                <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="text" placeholder="Cep" data-mask="00000-000" name="cepPassageiro" id="cep" onblur="pesquisacep(this.value);" autocomplete="off">
                <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="text" placeholder="Cidade" id="cidade" name="cidadePassageiro" autocomplete="off">
                    <select id="uf" class="input w-100 fs-4" name="ufPassageiro" style="border:none;border-bottom: 2px solid gray !important;outline:none;height: 13%;">
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
                    <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="text" placeholder="Rua" id="rua" name="logrPassageiro" autocomplete="off">
                    <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="text" placeholder="Bairro" id="bairro" name="bairroPassageiro" autocomplete="off">
                    <input class="w-100 fs-4 ps-3" style="border-bottom: 2px solid gray !important;height: 13%;border:none;outline:none" required="" type="number" placeholder="Número" name="numLogrPassageiro" id="numLogr" autocomplete="off">

                    <div class="w-100 d-flex justify-content-end">
                        <button class="btnCadastrar fs-4" style="width: 20%" type="submit">Cadastrar</button>
                    </div>
                

            </div>
        </div>

    </div>
    
</form>
</div>  

   <!-- 
    <div class="col-9 ">
        <div class="row w-100 h-100">
            <div class="col h-100 flex-column d-flex align-items-center border-start border-secondary pt-1">
                <div class="input-g m-2 w-100">
                    <label class="user-label2">Dados Pessoais</label>
                    <input required="" type="text" name="nomePassageiro" id="name" autocomplete="off" class="input w-100">
                    <label class="user-label">Nome</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" type="text" name="sobreNomePassageiro" id="lastname" autocomplete="off" class="input w-100">
                    <label class="user-label">Sobrenome</label>
                </div>
                <div class="input-g m-2 w-100">
                <select id="genero" class="input w-100" name="generoPassageiro">
                    <option value="M">Masculino</option>
                    <option value="F">Feminino</option>
                    <option value="O">Outro</option>
                </select>
                </div>
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
            <div class="col h-100 flex-column d-flex align-items-center border-start border-end border-secondary pt-1">
                <div class="input-g m-2 w-100">
                    <label class="user-label2">Endereço</label>
                    <input required="" class="input w-100" data-mask="00000-000" autocomplete="off" type="text"  onblur="pesquisacep(this.value);">
                    <label class="user-label">Cep</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" type="text" id="cidade" name="cidadePassageiro" class="input w-100" id="cidade">
                    <label class="user-label">Cidade</label>                   
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" type="text" name="bairroPassageiro" class="input w-100" id="bairro">
                    <label class="user-label">Bairro</label>                 
                </div>
                <div class="input-g m-2 w-100">
                    <label class="user-label2">Logradouro</label>
                    <input required="" autocomplete="off" type="text" name="logrPassageiro" class="input w-100" id="rua">
                    <label class="user-label">Rua</label>
                </div>
                <div class="input-g m-2 w-100">
                    <input required="" autocomplete="off" type="number" name="numLogrPassageiro" class="input w-100" id="numLgr">
                    <label class="user-label">Num</label>
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
                
            </div>
            <div class="w-100 d-flex justify-content-end">
                <button class="btnCadastrar" type="submit">Cadastrar</button>
            </div>
        </div>
        
    </div> -->


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