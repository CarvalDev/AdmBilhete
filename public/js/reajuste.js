

const reajustes = document.getElementsByName('reajustes')
console.log(reajustes[1].value)
let valores = [];
let datas = [];
let max = 0;
let min = 0;
for(var i=0;i<reajustes.length;i++){
    let formatar = (reajustes[i].value).split("#")
    valores[i] = formatar[1]
    formatar = formatar[0].split("-")
    datas[i] = formatar[0]
    if(i==0){
        max = valores[i]
        min = valores[i]
    }else{
        if(parseInt(max) < valores[i]){
            console.log(max + " e " +valores[i])
            max = parseInt(valores[i])
        }
        if(parseInt(min) > valores[i]){
            min = parseInt(valores[i])
        }
    }
    console.log(max)
}
console.log(max)

var anos = [2012, 2014, 2016, 2018, 2020, 2022];
        var precos = [3.0, 3.5, 4.0, 4.5, 5.0, 5.5];

        // Configuração do gráfico
        var ctx = document.getElementById('grafico').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar', 
            data: {
                labels: datas,
                datasets: [{
                    label: '',
                    data: valores,
                    backgroundColor: 'rgba(0,0,0,0)',
                    fill: false,
                    borderColor: '#ff0000',
                    borderWidth: 2
                }]
            },
            options: {
                scales: {
                    x: {
                        grid: {
                          display: false 
                        }
                      },
                      y: {
                        beginAtZero: false,
                        max: Math.round(max), 
                        min: (Math.round(min) - 1) ,
                        grid: {
                          display: false 
                        }
                      }
                },
                plugins: {
                    annotation: {
                        annotations: precos.map(function(preco, index) {
                            return {
                                type: 'line',
                                mode: 'horizontal',
                                scaleID: 'y',
                                value: preco,
                                borderColor: 'rgba(255, 0, 0, 0.7)',
                                borderWidth: 1,
                                label: {
                                    content: preco.toFixed(2) + ' R$',
                                    enabled: true,
                                    position: 'right'
                                }
                            };
                        })
                    },
                    legend: {
                        display: false
                    }
                }
            }
        });