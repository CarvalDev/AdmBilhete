



var ctx = document.getElementById("graficoBilhete").getContext('2d');

let comum = $("#comum").val()
let meia = $("#meia").val()
let gratuidade = $("#gratuidade").val()

let data =  {
        labels: ['Com gratuidade', 'Meia Gratuidade', 'Comum'],
        datasets: [{
            data: [parseInt(gratuidade), parseInt(meia), parseInt(comum)],
            backgroundColor:  [
                'rgba(0, 0, 0, 1)',
                 'rgba(154, 56, 16, 1)',
                 '#656d4a'
                 ],
            borderWidth: 0
        }]
    }

let options = {
    plugins: {
legend: {
  display: false,
  position: 'bottom' // Posiciona a legenda na parte inferior
},
datalabels: {
        anchor: 'end',
        align: 'top', // Posiciona os rótulos (ticks) no topo das barras
        formatter: function(value, context) {
            return value;
        }
    }
}
    }
var chart = new Chart(ctx, {
    type: 'doughnut',
    data: data,
    options: options
});


//grafico viagens


let dias = document.getElementsByName('dia')

let quantidadeViagens = [];
for(var i = 0;i<dias.length;i++){
  quantidadeViagens.push(dias[i].value)
}

let diasSemana = ['dom', 'seg', 'ter', 'qua', 'qui', 'sex', 'sab']

let ultimos4Dias = []

const last4days = () =>{
  let diaDeHoje = new Date().getDay()
  ultimos4Dias.push(diasSemana[diaDeHoje])
  let pivot= diaDeHoje;
  for(var i = 0;i<3;i++){
    if(pivot == 0){
      pivot = 6
    }else{
      pivot --
    }
    ultimos4Dias.push(diasSemana[pivot])
  }
  return ultimos4Dias.reverse()
}

let labels = last4days()
console.log(labels)
const dataViagens = {
    labels: labels,
    datasets: [{
      label: 'Quantidade de Viagens',
      backgroundColor: ['rgba(0, 0, 0, 1)', 'rgba(154, 56, 16, 1)' ],
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth:0,
      data: quantidadeViagens.reverse(),
      fill:false
    }]
  };


  const formatXAxis = (value) => {
    if(value >= 1000000){
      return value / 1000000 + 'M'
    }
    if (value >= 1000) {
      return value / 1000 + 'K';
    }
    return value;
  };
  // Configurações do gráfico
  const optionsViagens = {
      tooltips: {
          callbacks: {
              label: function(tooltipItem, data) {
                  return "Valor: " + tooltipItem.yLabel; // Personalize o texto da tooltip aqui
              }
          }
      },
    scales: {
      x: {
        grid: {
          display: false // Remove as linhas do grid para o eixo x
        },
        ticks: {
          display: true, // Remove as marcações (números) do eixo x
          position:'top',
          font:{
            weight: 'bolder'
          }
        },
        border: {
          display: false 
        }
      },
      
      y: {
        grid: {
          display: false // Remove as linhas do grid para o eixo x
        },
        border: {
          display: false // Remove as marcações (números) do eixo x
        },
        ticks:{
          display:false,
          callback: formatXAxis
        },
        color:'black',
        backDropColor: 'black'
        
      }
    },
    
    plugins: {
      legend: {
        display: false,
        position: 'bottom' // Posiciona a legenda na parte inferior
      },
      datalabels: {
              anchor: 'end',
              align: 'top', // Posiciona os rótulos (ticks) no topo das barras
              formatter: function(value, context) {
                  return value;
              }
          }
    }
  };

  // Criar o gráfico
  

  const ctxViagens = document.getElementById('graficoViagens').getContext('2d');
  const myChart = new Chart(ctxViagens, {
    type: 'bar', // Alterado de 'horizontalBar' para 'bar'
    data: dataViagens,
    options: optionsViagens,

  });


//grafico linhas


let numLinhas = []

let qtdConsumos = []


let inputsNumLinha = document.getElementsByName("numLinha")
let inputsQtdConsumos = document.getElementsByName("qtdConsumos")

for(var i =0;i<inputsNumLinha.length;i++){
    numLinhas.push(inputsNumLinha[i].value)
    qtdConsumos.push(parseInt(inputsQtdConsumos[i].value))
}

console.log(qtdConsumos)

const dataLinhas = {
    labels:numLinhas,
    datasets: [{
      label: 'Consumos:',
      backgroundColor: ['rgba(0, 0, 0, 1)', 'rgba(154, 56, 16, 1)' ],
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth:0,
      data: qtdConsumos,
      fill:false
    }]
  };


  const formatXAxisA = (value) => {
    if(value >= 1000000){
      return value / 1000000 + 'M'
    }
    if (value >= 1000) {
      return value / 1000 + 'K';
    }
    return value;
  };
  // Configurações do gráfico
  const optionsLinhas = {
      tooltips:false,
    scales: {
      x: {
        grid: {
          display: false // Remove as linhas do grid para o eixo x
        },
        ticks: {
          display: true, // Remove as marcações (números) do eixo x
          callback: formatXAxisA,
          font:{
            size:10
          },
          fontSize:8,
        },
        border: {
          display: false // Remove as marcações (números) do eixo x
        }
      },
      
      y: {
        grid: {
          display: false // Remove as linhas do grid para o eixo x
        },
        border: {
          display: false // Remove as marcações (números) do eixo x
        },
        ticks:{
          font:{
            weight: 900,
            size:12,
            opacity:1
          }
        },
        color:'black',
        backDropColor: 'black'
        
      }
    },
    indexAxis: 'y',
    plugins: {
      legend: {
        display: false,
        position: 'bottom' // Posiciona a legenda na parte inferior
      },
      tooltip:{
        enabled:false
      }
      
    }
  };

  // Criar o gráfico
  

  const ctxLinhas = document.getElementById('linhasGrafico').getContext('2d');
  const linhasChart = new Chart(ctxLinhas, {
    type: 'bar', // Alterado de 'horizontalBar' para 'bar'
    data: dataLinhas,
    options: optionsLinhas,

  });