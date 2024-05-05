



var ctx = document.getElementById("graficoBilhete").getContext('2d');
let data =  {
        labels: ['Com gratuidade', 'Meia Gratuidade', 'Comum'],
        datasets: [{
            data: [30, 40, 30],
            backgroundColor:  [
                'rgba(0, 0, 0, 1)',
                 'rgba(154, 56, 16, 1)',
                 'rgba(38, 31, 31, 1)' ],
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

const dataViagens = {
    labels: ['seg', 'ter', 'qua', 'qui'],
    datasets: [{
      label: 'Quantidade de Viagens',
      backgroundColor: ['rgba(0, 0, 0, 1)', 'rgba(154, 56, 16, 1)' ],
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth:0,
      data: [4000000, 4004000, 4200000, 4750000, 500000],
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

const dataLinhas = {
    labels: ['2059-10', '1178-10', '2583-10', '273R-42', '407J-10'],
    datasets: [{
      label: 'Consumos:',
      backgroundColor: ['rgba(0, 0, 0, 1)', 'rgba(154, 56, 16, 1)' ],
      borderColor: 'rgba(54, 162, 235, 1)',
      borderWidth:0,
      data: [4000000, 3000000, 2000000, 1750000, 900000],
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