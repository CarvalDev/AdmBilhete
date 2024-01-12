<form action="#" method="post">
    <div class="card-header">
      <strong>INFORMAÇÕES DO USUÁRIO</strong>
    </div>
    <div class="card-body row" style="align-items: center; justify-content: center;">
      <div class="col-md-2   text-center" >
        <div class="bg-white rounded border" >
        <img id="preview" src="" alt="..."
            class="rounded  w-100  "  style="height:200px; object-fit: cover; border:4px solid #ccc" >
        </div>
      </div>
      <div class=" col-md-10">
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="nome" class="col-form-label">Nome:</label>
            <input type="text" class="form-control" name="nome" maxlength="50" id="nome" value=""
              required>
            <div class="invalid-feedback">
              Nome Inválido
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="sobrenome" class="col-form-label">Sobrenome:</label>
            <input type="text" class="form-control" name="sobrenome" maxlength="50" id="sobrenome"
              value="" required>
            <div class="invalid-feedback">
              Sobrenome Inválido
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cpf" class="col-form-label">CPF:</label>
            <input type="text" class="form-control" name="cpf" maxlength="50" id="cpf"
              data-mask="000.000.000-00" data-mask-selectonfocus="true" value="" required>
            <div class="invalid-feedback">
              CPF Inválido
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <label for="nasc" class="col-form-label">Data de Nascimento:</label>
            <input type="date" class="form-control" name="nasc" id="nasc" value="" required>
            <div class="invalid-feedback">
              Data Inválido
            </div>
          </div>
          <div class="col-md-6">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" name="email" maxlength="100" value=""
              id="email" required>
            <div class="invalid-feedback">
              E-mail Inválido
            </div>
          </div>
          <div class="col-md-3">
            <label for="senha" class="col-form-label">Senha:</label>
            <input type="password" class="form-control" name="senha" value="" maxlength="10"
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
          <a class=" btn btn-primary px-3" role="button" aria-disabled="true" href="index.php">Voltar</i></a>
          <input type="submit" class=" btn btn-success" value="Salvar">
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