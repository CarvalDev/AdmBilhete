<script>
    let faturamentoMensal = [10000, 12000, 15000, 1000, 20000, 22000, 25000, 28000, 30000, 32000, 35000, 38000];

// Labels para os meses
let meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];

const defineMeses = (mes) =>{
  newMeses = []
  let pivot = mes 
  for(let i=0;i<12;i++){
    if(i != 0) pivot--
    if((pivot -1) < 0 ){
      pivot = 11
    }
    newMeses.push(meses[pivot])
  }
  return newMeses
}




const semestral = () => {
$.ajax({
        url: `{{ route('faturamento.fluxo', 'semestral') }}`,
        method: 'get', 
        
        success: function(res){
          console.log(res)
          faturamentoMensal = []
          newMeses = []
          res.valores.forEach((item) => {
            faturamentoMensal.push(item.semana.toFixed(2))
            
          })
          res.datas.forEach((item) => {
          
            newMeses.push(item.data)
          })
          
          console.log(faturamentoMensal)
          console.log(newMeses)
          console.log("ata")
         
          console.log(newMeses)
           config = {
            type: 'line',
            data: {
              labels: newMeses.reverse(),
              datasets: [{
                label: 'Faturamento Mensal',
                data: faturamentoMensal.reverse(),
                fill: false,
                borderColor: '#3C7352',
                tension: 0.4
              },
              {
                  label: 'Sombra',
                  data: faturamentoMensal.map(value => value - 1000), // Ajuste conforme desejado
                  fill: false,
                  borderColor: 'rgba(60, 115, 82, 0.2)', // Cor mais clara para simular sombra
                  tension: 0.4,
                  borderWidth: 9 // Ajuste a largura conforme desejado para simular uma sombra mais suave
                }]
            },
            options: {
              plugins: {
              legend: {
                display:false
              }
            },
              tension:0.4,
              scales: {
                y: {
                  beginAtZero: true,
                  grid:{
                      display:true
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                    display:true,
                    callback: formatXAxis,
                    padding:20
                  },
                },
                x:{
                  grid:{
                      display:false
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                      padding:20
                  }
                }
              }
            }
          };
                    myChart = new Chart(
            document.getElementById('graficoFluxo'),
            config
);
        
        },
        error:(e) => {
          console.log(e)
        }
      })
    }




    const trimestral = () => {
$.ajax({
        url: `{{ route('faturamento.fluxo', 'trimestral') }}`,
        method: 'get', 
        
        success: function(res){
          console.log(res)
          faturamentoMensal = []
          newMeses = []
          res.valores.forEach((item) => {
            faturamentoMensal.push(item.semana.toFixed(2))
            
          })
          res.datas.forEach((item) => {
          
            newMeses.push(item.data)
          })
          
          console.log(faturamentoMensal)
          console.log(newMeses)
          console.log("ata")
         
          console.log(newMeses)
           config = {
            type: 'line',
            data: {
              labels: newMeses.reverse(),
              datasets: [{
                label: 'Faturamento Mensal',
                data: faturamentoMensal.reverse(),
                fill: false,
                borderColor: '#3C7352',
                tension: 0.4
              },
              {
                  label: 'Sombra',
                  data: faturamentoMensal.map(value => value - 1000), // Ajuste conforme desejado
                  fill: false,
                  borderColor: 'rgba(60, 115, 82, 0.2)', // Cor mais clara para simular sombra
                  tension: 0.4,
                  borderWidth: 9 // Ajuste a largura conforme desejado para simular uma sombra mais suave
                }]
            },
            options: {
              plugins: {
              legend: {
                display:false
              }
            },
              tension:0.4,
              scales: {
                y: {
                  beginAtZero: true,
                  grid:{
                      display:true
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                    display:true,
                    callback: formatXAxis,
                    padding:20
                  },
                },
                x:{
                  grid:{
                      display:false
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                      padding:20
                  }
                }
              }
            }
          };
                    myChart = new Chart(
            document.getElementById('graficoFluxo'),
            config
);
        
        },
        error:(e) => {
          console.log(e)
        }
      })
    }



    const mensal = () => {
$.ajax({
        url: `{{ route('faturamento.fluxo', 'trimestral') }}`,
        method: 'get', 
        
        success: function(res){
          console.log(res)
          faturamentoMensal = []
          newMeses = []
          res.valores.forEach((item) => {
            faturamentoMensal.push(item.semana.toFixed(2))
            
          })
          res.datas.forEach((item) => {
          
            newMeses.push(item.data)
          })
          
          console.log(faturamentoMensal)
          console.log(newMeses)
          console.log("ata")
         
          console.log(newMeses)
           config = {
            type: 'line',
            data: {
              labels: newMeses.reverse(),
              datasets: [{
                label: 'Faturamento Mensal',
                data: faturamentoMensal.reverse(),
                fill: false,
                borderColor: '#3C7352',
                tension: 0.4
              },
              {
                  label: 'Sombra',
                  data: faturamentoMensal.map(value => value - 1000), // Ajuste conforme desejado
                  fill: false,
                  borderColor: 'rgba(60, 115, 82, 0.2)', // Cor mais clara para simular sombra
                  tension: 0.4,
                  borderWidth: 9 // Ajuste a largura conforme desejado para simular uma sombra mais suave
                }]
            },
            options: {
              plugins: {
              legend: {
                display:false
              }
            },
              tension:0.4,
              scales: {
                y: {
                  beginAtZero: true,
                  grid:{
                      display:true
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                    display:true,
                    callback: formatXAxis,
                    padding:20
                  },
                },
                x:{
                  grid:{
                      display:false
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                      padding:20
                  }
                }
              }
            }
          };
                    myChart = new Chart(
            document.getElementById('graficoFluxo'),
            config
);
        
        },
        error:(e) => {
          console.log(e)
        }
      })
    }

mensal()
const anual = () => {
$.ajax({
        url: `{{ route('faturamento.fluxo', 'anual') }}`,
        method: 'get', 
        
        success: function(res){
          console.log(res)
          faturamentoMensal = []
          
          res.forEach((item) => {
            faturamentoMensal.push(item.mes.toFixed(2))
          })
          console.log(meses)
          console.log("ata")
          let dataHoje = new Date().getMonth()
          let newMeses = defineMeses(dataHoje)
          console.log(newMeses)
           config = {
            type: 'line',
            data: {
              labels: newMeses,
              datasets: [{
                label: 'Faturamento Mensal',
                data: faturamentoMensal.reverse(),
                fill: false,
                borderColor: '#3C7352',
                tension: 0.4
              },
              {
                  label: 'Sombra',
                  data: faturamentoMensal.map(value => value - 1000), // Ajuste conforme desejado
                  fill: false,
                  borderColor: 'rgba(60, 115, 82, 0.2)', // Cor mais clara para simular sombra
                  tension: 0.4,
                  borderWidth: 9 // Ajuste a largura conforme desejado para simular uma sombra mais suave
                }]
            },
            options: {
              plugins: {
              legend: {
                display:false
              }
            },
              tension:0.4,
              scales: {
                y: {
                  beginAtZero: true,
                  grid:{
                      display:true
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                    display:true,
                    callback: formatXAxis,
                    padding:20
                  },
                },
                x:{
                  grid:{
                      display:false
                  },
                  border:{
                      display:false
                  },
                  ticks:{
                      padding:20
                  }
                }
              }
            }
          };
                   
            myChart.data.labels.pop()
            myChart.data.labels.push(newMeses)
            myChart.data.datasets[0].data.pop()
            myChart.data.datasets[0].data.push(faturamentoMensal.reverse())
            myChart.update()
          
        
        },
        error:(e) => {
          console.log(e)
        }
      })
    }

   

    

const formatXAxis = (value) => {
    if(value >= 1000000){
      return value / 1000000 + 'M'
    }
    if (value >= 1000) {
      return value / 1000 + 'K';
    }
    return value;
  };
// Configuração do gráfico
let config = {
  type: 'line',
  data: {
    labels: meses,
    datasets: [{
      label: 'Faturamento Mensal',
      data: faturamentoMensal,
      fill: false,
      borderColor: '#3C7352',
      tension: 0.4
    },
    {
        label: 'Sombra',
        data: faturamentoMensal.map(value => value - 1000), // Ajuste conforme desejado
        fill: false,
        borderColor: 'rgba(60, 115, 82, 0.2)', // Cor mais clara para simular sombra
        tension: 0.4,
        borderWidth: 9 // Ajuste a largura conforme desejado para simular uma sombra mais suave
      }]
  },
  options: {
    plugins: {
    legend: {
      display:false
    }
  },
    tension:0.4,
    scales: {
      y: {
        beginAtZero: true,
        grid:{
            display:true
        },
        border:{
            display:false
        },
        ticks:{
          display:true,
          callback: formatXAxis,
          padding:20
        },
      },
      x:{
        grid:{
            display:false
        },
        border:{
            display:false
        },
        ticks:{
            padding:20
        }
      }
    }
  }
};

// Criação do gráfico


let estudante = document.getElementById('estudante').value
let estudante_meia = document.getElementById('estudante_meia').value
let comum = document.getElementById('comum').value


const dataPolar = {
      labels: ['Estudante Meia', 'Comum', 'Estudante'],
      datasets: [{
        label: 'Faturamento',
        data: [estudante_meia, comum, estudante],
        backgroundColor: [
          'rgba(0, 0, 0, 1)',
          'rgba(154, 56, 16, 1)',
          '#656d4a',
        ],
        
        
      }]
    };

    // Configuração do gráfico
    const configPolar = {
        
      type: 'polarArea',
      data: dataPolar,
      options: {
        plugins: {
        legend: {
        display:true,
        position:'bottom'
        },
    },
        scales: {
          r: {
            suggestedMin: 0,
            suggestedMax: 400,
            grid:{
                display:false
            },
            ticks:{
                display:false
            }
          }
        }
      }
    };

    // Criação do gráfico
    var meu = new Chart(
      document.getElementById('polar'),
      configPolar
    );
    myChart = new Chart(
            document.getElementById('graficoFluxo'),
            config
            );
    

</script>