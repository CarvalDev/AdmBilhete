<div class="space">
<dialog  class="container2">
    <div class="cookiesContent w-100" id="cookiesPopup">
      <button id="close" onclick="fechaModal()" class="close">✖</button>
      
      <p>Adicionar Linha</p>

      <form id="linhaForm"  action="{{ route('linhas.store') }}"  class="w-100   flex-column gap-4 d-flex justify-content-center align-items-center" method="POST">
        @csrf
        <div class=" w-75 d-flex flex-column justify-content-start align-items-start ">
          <label >Nome da linha</label>
          <input id="nomeLinha" type="text" class="input w-100" >
          
        </div>
        <div class=" w-75 d-flex flex-column justify-content-start align-items-start ">
            <label >Numero da linha</label>
            <input type="text" data-mask="0000-00" id="NumLinha"  class="input w-100"  placeholder="0000-00">
            
          </div>
          <div class=" w-75 d-flex flex-column justify-content-start align-items-start ">
            <label >Quantidade de carros</label>
            <input type="number" id="qtdCarroLinha" class="input w-100" >
            
          </div>

          <button type="submit"  id="close" class="accept ">Adicionar</button>
      </form>
    </div>
    </dialog>
  </div>

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