<div class="space">
    <dialog  class="container2">
        <div class="cookiesContent w-100" id="cookiesPopup">
          <button id="close" onclick="fechaModal()" class="close">✖</button>
          
          <p>Pedido de bilhete</p>
    
          <div id="linhaForm"    class="w-100  flex-column gap-4 d-flex justify-content-center align-items-center" method="POST">
            @csrf
            <div class="header w-100 d-flex flex-row p-2" style="height: 35%;border-bottom: 1px solid rgba(1, 1, 1, 0.1)">
                <div class="areaImage w-25 h-100 d-flex  align-items-center justify-content-center">
                    <img @if (1 != 0)
                        src="{{ url("images/userPadrao.png") }}" 
                        @else  
                        src="{{ url('images/userPadrao.png') }}"
                    @endif class="rounded-circle" width="100px"/>
                </div>
                <div class="w-75 d-flex flex-column align-items-start justify-content-start">
                        <h5 class="text-uppercase fw-bold" id="nome_modal">nome</h1>
                        <span class="fw-bold text-muted" id="cpf_modal">cpf</span>
                        <span class="fw-bold text-muted" id="email_modal">email</span>
                        <span class="fw-bold text-muted" id="nasc_modal">dataasc</span>
                        <input type="hidden" id="idPedido">
                        <input type="hidden" id="idPassageiro">
                </div>
            </div>

            <div class="w-100 d-flex flex-row align-items-center justify-content-between">
                <span class="fs-5" style="color:rgba(1, 1, 1, 0.7)">Tipo de bilhete: <span class="fw-bold" id="tipo_modal"></span></span>
                <span class="fs-5" style="color:rgba(1, 1, 1, 0.7) " id="data_modal">16/06/2024</span>
            </div>
            
            <div class="w-100 d-flex flex-row align-items-center justify-content-center gap-3" id="btn-area">
              <button type="submit" onclick="fechaModal('Aprovado')" id="close" class="accept mt-2 " style="background-color: #13e700">Aceitar</button>
              <button type="submit"  onclick="fechaModal('Fechado')"  id="close" class="accept mt-2 ">Recusar</button>
            </div>
        </div>
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
        
        const acionaModal = (id) =>{
            console.log(id)

            
            $.ajax({
                url: "http://localhost:8000/pedidoBilhete/show/"+id,
                method: 'get',
                
                success: function(res) {
                    console.log(res)
                    document.getElementById('nome_modal').innerText = res.nome
                    document.getElementById('cpf_modal').innerText = res.cpf
                    document.getElementById('email_modal').innerText = res.email
                    document.getElementById('nasc_modal').innerText = res.nasc
                    document.getElementById('tipo_modal').innerText = res.tipo
                    document.getElementById('data_modal').innerText = res.data
                    document.getElementById('idPedido').value = res.idPedido
                    document.getElementById('idPassageiro').value = res.idPassageiro
                    if(res.status != "Aberto"){
                        $("#btn-area").html(`<div class="w-100 d-flex flex-row align-items-center justify-content-center gap-3" id="btn-area"><button type="submit"  onclick="fechaModal('null')"  id="close" class="accept mt-2 ">Fechar</button></div>`)
                    }else{
                        let newHtml = `<div class="w-100 d-flex flex-row align-items-center justify-content-center gap-3" id="btn-area">`
                            newHtml += `<button type="submit" onclick="fechaModal('Aprovado')" id="close" class="accept mt-2 " style="background-color: #13e700">Aceitar</button>`
                            newHtml += `<button type="submit"  onclick="fechaModal('Fechado')"  id="close" class="accept mt-2 ">Recusar</button>`
                            newHtml += '</div>'
                            $("#btn-area").html(newHtml)
                    }
                    modal.showModal()
                }
            })
            
        }
        const fechaModal = (status) =>{
            modal.close()
            if(status != "null"){
            let idPedido = document.getElementById('idPedido').value
            let idPassageiro = document.getElementById('idPassageiro').value
            $.ajax({
                url: "http://localhost:8000/pedidoBilhete/responder/"+idPedido,
                method: 'put',
                data: {status: status},
                success: (res) =>{
                    console.log(res)
                }
            })
        }
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