<div class="space">
    <dialog  class="container2">
        <div class="cookiesContent w-100" id="cookiesPopup">
          <button id="close" onclick="fechaModal()" class="close">✖</button>
          
          <p>Alterar preço da passagem</p>
    
          <form id="linhaForm"  action="{{ route('linhas.store') }}"  class="w-100   flex-column gap-4 d-flex justify-content-center align-items-center" method="POST">
            @csrf
            <div class=" w-75 d-flex flex-column justify-content-start align-items-start ">
              <label >Preço</label>
              <input onkeyup="mascaraMoeda(this, event)" id="passagemPreco" maxlength="7" type="text" class="input w-100 mt-1" >
              
            </div>
            
    
              <button type="submit"  id="close" class="accept mt-2 ">Adicionar</button>
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
    
        String.prototype.reverse = function(){
  return this.split('').reverse().join(''); 
};
document.getElementById("passagemPreco").value = "R$"
    function mascaraMoeda(campo,evento){
        
  var tecla = (!evento) ? window.event.keyCode : evento.which;
  var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  var resultado  = "";
  var mascara = "##.###.###,##".reverse();
  for (var x=0, y=0; x<mascara.length && y<valor.length;) {
    if (mascara.charAt(x) != '#') {
      resultado += mascara.charAt(x);
      x++;
    } else {
      resultado += valor.charAt(y);
      y++;
      x++;
    }
  }
  campo.value = "R$ " + resultado.reverse();
}
    </script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>