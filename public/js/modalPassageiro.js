console.log("passageiro")

const botao = document.querySelector("#btn-modalPassageiro");
const modal = document.querySelector("#modalPassageiro");
const closeButton = document.querySelector("#bt-closePassageiro");
const close1 = document.querySelector("#bt-cancelarPassageiro");

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
