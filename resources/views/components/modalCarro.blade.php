<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
      <div class="modal-content">
        <form action="{{route('carros.store', $linha->id)}}" method="POST">
          @csrf
        <div class="modal-header" style="border-bottom:1px solid gray">
          <h1 class="modal-title fs-5" id="exampleModalLabel">  Adicionar Carros a Linha {{$linha->nomeLinha}}</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center gap-2 align-items-center justify-content-center d-flex mt-2">
         <label for="qtdCarros">Qtd Carros:</label>
          <input type="text" name="qtdCarro" class="form-control w-25">
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Adicionar Carros</button>
        </div>
      </form>
      </div>
    </div>
  </div>