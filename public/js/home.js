let porcentagem = $("#porcentagemSuporte").val()

porcentagem = parseFloat(porcentagem).toFixed(2)
porcentagem = porcentagem + "%"
$("#barraPreenchida").css('width', porcentagem)
 
const formatConsumoTotal = consumo => {
    if(consumo.toString().length >= 7){
        return consumo/1000000 + 'M'
    }
    else if(consumo.toString().length >= 4){
        return consumo/1000 + 'K'
    }
    return consumo
}

let totalConsumo = document.getElementById("totalConsumo")

consumo = formatConsumoTotal(parseInt(totalConsumo.innerText))

totalConsumo.innerText = consumo


console.log(consumo)


