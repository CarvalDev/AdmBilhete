<link rel="stylesheet" href="{{ URL::asset('css/modalPassageiro.css') }}">

<dialog class="p-0" style="height: 67vh; width: 75vw" id="modalPassageiro">
    <div class="h-100 w-100">
        <div class="d-flex justify-content-between px-2 py-2 ">
            <div class="text-center" style="width:30%;">
                <p class="p-0 m-0 fw-bold text-secondary">Registro de Passageiros</p>
            </div>
            <button id="bt-closePassageiro" type="button" class="btn-close btn-white" data-bs-dismiss="modal"
                aria-label="Close"></button>
        </div>
        <hr style="border: 0.1px solid gray" class="my-3">

        <div class="row" style="width: 99%">
            <div class="col-4 d-flex justify-content-center align-items-center">
                <label for="foto" id="lbFoto">
                <img
                    src="{{ url('storage/site/add-usuario.png') }}" name="fotoPassageiro" style="width:158px; border-radius: 25px" alt="">
                    <input type="file" id="foto" name="foto" accept="image/*" class="custom-file-input" enctype="multipart/form-data">
                </label>
                </div>
            <div class="col-4 d-flex align-items-center"><input class="form-control" type="text" name="nomePassageiro" id="name"
                    placeholder="Nome Completo"></div>
            <div class="col-1 d-flex align-items-center"><select id="genero" name="generoPassageiro">
                    <option value="M">M</option>
                    <option value="F">F</option>
                </select></div>
            <div class="col-3 d-flex align-items-center"><input class="form-control" type="text" name="cpfPassageiro" id="cpf"
                    placeholder="CPF"></div>
            <div class="col-4 d-flex justify-content-center align-items-center my-1"><input type="date"
                    name="dataNasPassageiro" id="data_nascimento"></div>
            <div class="col-4">
                <label class="sr-only" for="inlineFormInputGroup">Bairro</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><input type="text" style="width: 100px; border:none"placeholder="cep"></div>
                    </div>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Bairro">
                </div>
            </div>

            <div class="col-1">
                
                    
                    <select id="uf" name="ufPassageiro">
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
                    </select>
            </div>
            <div class="col-3">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Logradouro" aria-label="Recipiente para nickname" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <span class="input-group-text" id="basic-addon2"><input type="text" style="width: 50px; border:none"placeholder="N°"></span>
                    </div>
                  </div>
            </div>
            <div class="d-flex justify-content-end align-items-end">
                
                <div class="col-8">
                    <input class="form-control text-center" type="text" name="complemento" id="complemento" placeholder="Complemento">
                </div>
                
            </div>
            
            <div class="d-flex justify-content-end align-items-end gap-2 my-5">
            <div class="col-4"><input class="form-control" type="text" name="numTelPassageiro" id="telefone" placeholder="Telefone"></div>
            <div class="col-4">  <input class="form-control" type="email" name="emailPassageiro" id="email" placeholder="E-mail"></div> 
            </div>
            <div class="d-flex justify-content-end align-items-end gap-2 ">
            <div class="col-4"><input class="form-control" type="text" name="numTelPassageiro" id="telefone" placeholder="Senha"></div>
            <div class="col-4">  <input class="form-control" type="email" name="emailPassageiro" id="email" placeholder="Confirmar senha"></div> 
            </div>

            <div class="d-flex justify-content-end align-items-end">
                <div class="col-12"><div class="d-flex justify-content-end mt-xl-5 mb-xl-3">
                    <button type="button" id="bt-cancelarPassageiro" class="btn btnCss fw-bold" style="width: 5vw">Cancelar</button>
                    <button type="button" class="btn btnCss fw-bold ms-5"  style="width: 5vw">Enviar</button>
                </div></div>
            </div>
        </div>



    </div>
    </div>
    </div>

</dialog>

<script src="{{ URL::asset('js/modalPassageiro.js') }}"></script>
