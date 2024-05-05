var ctx = document.getElementById('grafico').getContext('2d');


// Dados do gráfico
var data = {
  labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
  datasets: [{
    label: '',
   
    borderColor: '#000',
    borderWidth: 2,
    data: [2400000, 520000, 1180000, 1115222, 1117333, 1193333, 2111000,  1180000, 1115222, 1117333, 1193333, 2111000], 
    fill: false,
    backgroundColor: 'rgba(0, 0, 0, 0)'
  }]
};

// Opções do gráfico
var options = {
    scales: {
      x: {
        grid: {
          display: false 
        }
      },
      y: {
        beginAtZero: true,
        max: 2500000, 
        grid: {
          display: false 
        }
      }
    },
    plugins:{
    legend:{
        display: false
    }
    }
  };


var myLineChart = new Chart(ctx, {
  type: 'line',
  data: data,
  options: options
});