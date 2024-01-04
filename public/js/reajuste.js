var anos = [2012, 2014, 2016, 2018, 2020, 2022];
        var precos = [3.0, 3.5, 4.0, 4.5, 5.0, 5.5];

        // Configuração do gráfico
        var ctx = document.getElementById('grafico').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: anos,
                datasets: [{
                    label: '',
                    data: precos,
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
                        beginAtZero: true,
                        max: 6, 
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