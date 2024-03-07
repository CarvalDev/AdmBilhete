<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <form action="{{route('carros.store', $linha->id)}}" method="POST">
          @csrf
        <div class="modal-header border-0" style="border-bottom:1px solid gray">
          
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <h1 class="modal-title fs-5 fw-semibold ms-4" id="exampleModalLabel">  Adicionar Carros a Linha {{$linha->nomeLinha}}</h1>
        <div class="modal-body border-0 d-flex justify-content-center align-items-center">
          
          <div class="w-75 flex-column justify-content-start align-items-start">
         <label for="qtdCarros">Quantidade de Carros:</label>
          <input type="text" name="qtdCarro" class="input w-100">
        </div>
        </div>
        <div class="modal-footer d-flex justify-content-center align-items-center border-0">
          <button type="submit" class="accept mb-3">Adicionar Carros</button>
        </div>
      </form>
      </div>
    </div>
    <style>
     button.accept {
      background-color: #e70000;
      border: none;     
      width: 200px;
      padding: 10px;
      font-size: 15px;
      color: white;
      box-shadow: 0px 6px 18px -5px #e70000;
      outline: none !important;
    }
    .modal-content {
      border-radius: 0;
      height: 400px ;
    }
    .input {
  border: solid 1.5px #9e9e9e;
  background: none;
  padding: 0.8rem;
  font-size: 1rem;
  color: #000000;
  transition: border 150ms cubic-bezier(0.4, 0, 0.2, 1);
}
  </style>
  </div>
  