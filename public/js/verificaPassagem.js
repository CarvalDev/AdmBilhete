var input = document.getElementById('numero')
var numPass = document.getElementById('numPassagem')
var adiciona = document.getElementById('adiciona')
var remove = document.getElementById('remove')
var modalPrimeiro = document.getElementById('primeira')
var numPassA = document.getElementById('numPassagemA')
var numPassR = document.getElementById('numPassagemR')
var qtdPassA2R = document.getElementById('qtdPassagemAnterior2')
var qtdPassA = document.getElementById('qtdPassagemAnterior')
var inputAdd = document.getElementById('inputAdiciona')
var inputRemove = document.getElementById('inputRemove')
var idBilheteInput = document.getElementById('idBilhete')
var idBilheteInputAdd = document.getElementById('idBilheteAdd')
var idBilheteInputRemove = document.getElementById('idBilheteRemove')
// var adicionaBtn = document.getElementById('adicionaBtn')
// var removeBtn = document.getElementById('removeBtn')
console.log(input.value);

function adicionar() {
    var id = idBilheteInput.value
    adiciona.style.display = "flex"
    numPassA.innerHTML = numPass.innerHTML
    modalPrimeiro.style.display = "none"
    idBilheteInputAdd.value = id
    console.log(idBilheteInputAdd);
    qtdPassA.value = numPassA.innerHTML
}


function remover() {
    var id = idBilheteInput.value
    remove.style.display = "flex"
    numPassR.innerHTML = numPass.innerHTML
    modalPrimeiro.style.display = "none"
    idBilheteInputRemove.value = id
    console.log(idBilheteInputRemove)
    qtdPassA2R = numPassR.innerHTML
}

function plusNumero() {
    numPassA.innerHTML = parseInt(numPassA.innerHTML )+1
    inputAdd.value = numPassA.innerHTML

}

function minusNumero() {
    if(parseInt(numPassR.innerHTML) > 0) {
        numPassR.innerHTML = parseInt(numPassR.innerHTML )-1
        inputRemove.value = numPassR.innerHTML
    } else {
       
    }
    
}

function voltar() {
    remove.style.display = "none"
    adiciona.style.display = "none"
    modalPrimeiro.style.display = "flex"
}

function imprime(passagens, idBilhete) {
    numPass.innerHTML = passagens;
    console.log(idBilhete)
    idBilheteInput.value = idBilhete
    
}