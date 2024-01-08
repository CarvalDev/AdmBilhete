const consumoTd = document.getElementById('consumo')

console.log(consumoTd.innerHTML)





console.log(consumoTd.innerHTML.replaceAll(" ", "").replace(/(\r\n|\n|\r)/gm, ""))
