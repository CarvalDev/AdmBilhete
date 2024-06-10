<script>
    const faturamentoMensal = [10000, 12000, 15000, 1000, 20000, 22000, 25000, 28000, 30000, 32000, 35000, 38000];

// Labels para os meses
const meses = ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'];


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
const config = {
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
var myChart = new Chart(
  document.getElementById('graficoFluxo'),
  config
);


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
    var myChart = new Chart(
      document.getElementById('polar'),
      configPolar
    );

</script>