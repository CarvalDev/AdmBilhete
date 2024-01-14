const consumoTd = document.getElementById('consumo')

console.log(consumoTd.innerHTML)


const pegaStatus =(status, id)=>{
    const statusInput = document.getElementById('statusCarro')
    const idInput = document.getElementById('idCarro')
    statusInput.value = status
    idInput.value = id
}


console.log(consumoTd.innerHTML.replaceAll(" ", "").replace(/(\r\n|\n|\r)/gm, ""))
