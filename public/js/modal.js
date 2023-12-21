function modPerfil(){
    console.log('oi')
    const botao = document.querySelector("#btn-modal");
    const modal = document.querySelector("#modal");
    const close = document.querySelector("#bt-close");

    botao.onclick = function() {
        modal.showModal();
    }
    close.onclick = function() {
        modal.close();
    }
}