<div class="space">
<dialog  class="container2">
    <div class="cookiesContent w-100" id="cookiesPopup">
      <button id="close" onclick="fechaModal()" class="close">✖</button>
      
      <p>Adicionar Bilhete</p>

      <form class="row justify-content-around mt-5 w-100" action="{{ route('passageiros.bilhetes.store', $idUsuario['id'] ) }}"  style="" method="POST">
        @csrf
        <div class="w-100 justify-content-center d-flex flex-row align-items-center ">
          <label for="tipoBilhete" class="text-center px-3" style="border-right: 1px solid black">Tipo</label>
          <select id="tipoBilhete" class="form-control ms-2" name="tipoBilhete" style="border-bottom: 1px solid black">
              <option value="Estudante">Estudante</option>
              <option value="Idoso">Idoso</option>
              <option value="Professor">Professor</option>
              <option value="Comum">Comum</option>
              <option value="Pcd">Pessoa com Deficiência</option>
              <option value="Obesa">Pessoa Obesa</option>
              <option value="Gestante">Gestante</option>
              <option value="Corporativo">Corporativo</option>
          </select>
      </div>
      <div class="w-100 d-flex align-items-center gap-2  ">
        <label for="status" style="width: 30%;border-right: 1px solid black" class=" text-center">Status</label>
        <select id="status" class="form-control" name="status" style="width:60%;border-bottom: 1px solid black">
            <option value="Ativo">Ativo</option>
            <option value="Inativo">Inativo</option>
        </select>
    </div>

          <button type="submit"  id="close" class="accept ">Adicionar</button>
      </form>
    </div>
    </dialog>
  </div>
  @if ($errors->any())
        <ul class="errors">
            @foreach ($errors->all() as $error)
                <li class="error">{{$error}}</li>
            @endforeach
        </ul>
    @endif

<style>
    .input {
  border: solid 1.5px #9e9e9e;
  background: none;
  padding: 0.8rem;
  font-size: 1rem;
  color: #000000;
  transition: border 150ms cubic-bezier(0.4, 0, 0.2, 1);
}

   
    .container2{
        margin: auto;
        outline: none !important;
        border: none !important;
        backdrop-filter: blur(2px);
        width: 40vw !important;
        
    }
      
    
  .cookiesContent {
    
    width: 40vw !important;
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #fff;
    color: #000;
    text-align: center;
    border-radius: 20px;
    padding: 30px 30px 70px;
    button.close {
      width: 30px;
      font-size: 20px;
      color: #c0c5cb;
      align-self: flex-end;
      background-color: transparent;
      border: none;
      margin-bottom: 10px;
    }
    
    p {
      margin-bottom: 40px;
      font-size: 20px;
      font-weight: 600;
      align-self: flex-start;
    }
    button.accept {
      background-color: #e70000;
      border: none;
      
      width: 200px;
      padding: 14px;
      font-size: 16px;
      color: white;
      box-shadow: 0px 6px 18px -5px #e70000;
      outline: none !important;
    }
  }
</style>

<script>
    let modal = document.querySelector('.container2')
    
    const acionaModal = () =>{
        modal.showModal()
    }
    const fechaModal = () =>{
        modal.close()
    }


</script>
<script src="{{ asset('js/jquery.mask.min.js') }}"></script>