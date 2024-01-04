var ctx = document.getElementById('grafico').getContext('2d');
var ctx2 = document.getElementById('graficoAmpliado').getContext('2d');

// Dados do gráfico
var data = {
  labels: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
  datasets: [{
    label: '',
   
    borderColor: '#FF0000',
    borderWidth: 2,
    data: [2400000, 520000, 1180000, 1115222, 1117333, 1193333, 2111000], 
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


var myLineChart = new Chart(ctx2, {
  type: 'line',
  data: data,
  options: options
});

var meuGrafico = new Chart(ctx, {
  type: 'line',
  data: data,
  options: options
});

const divPrincipal = document.getElementById('sectionPrincipal')
const divGrafico = document.getElementById('sectionFluxoViagens')

const flipAndShow = () => {
  divPrincipal.style.animation = "flipSection 1s linear"
  setTimeout(function(){
    divPrincipal.style.display = "none"
    divGrafico.style.display = "flex"
    divGrafico.style.animation = "desflipSection 1s linear"
  }, 500)
  
}

const flipAndShow2 = () => {
  divGrafico.style.animation = "flipSection 1s linear"
  setTimeout(function(){
    divGrafico.style.display = "none"
    divPrincipal.style.display = "flex"
    divPrincipal.style.animation = "desflipSection 1s linear"
  }, 500)
  
}