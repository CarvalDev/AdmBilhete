function modPerfil(){
    console.log('oi')
    const botao = document.querySelector("#btn-modal");
    const modal = document.querySelector("#modal");
    const close = document.querySelector("#bt-close");
    const close1 = document.querySelector("#bt-close1");

    botao.onclick = function() {
        modal.showModal();
    }
    close.onclick = function() {
        modal.close();
    }
    close1.onclick = function() {
        modal.close();
    }
}