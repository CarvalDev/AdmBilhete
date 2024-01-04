
   
    const botao = document.querySelector("#btn-modal");
    const modal = document.querySelector("#modal");
    const closeButton = document.querySelector("#bt-close");
    const close1 = document.querySelector("#bt-close1");

    console.log(botao)
    botao.addEventListener("click", ()=>{
        modal.showModal()
    })
    closeButton.onclick = function() {
        modal.close();
    }
    close1.onclick = function() {
        modal.close();
    }
