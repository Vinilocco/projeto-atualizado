// Exemplo de inicialização de gráfico com Chart.js
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [],  // As seções serão adicionadas aqui
        datasets: [{
            label: 'Clique por Seção',
            data: [],  // Os cliques correspondentes serão adicionados aqui
        }]
    }
});

function obterDadosGrafico() {
    console.log('Enviando solicitação para obter dados do servidor...');
    fetch('obter_dados_grafico.php')
        .then(response => response.json())
        .then(dados => {
            console.log('Dados recebidos:', dados);

            // Verifica se o gráfico está inicializado
            if (myChart.data && myChart.data.labels) {
                // Limpa os dados antigos do gráfico
                myChart.data.labels = [];
                myChart.data.datasets[0].data = [];

                // Adiciona os novos dados ao gráfico
                dados.forEach(item => {
                    myChart.data.labels.push(item.secao);
                    myChart.data.datasets[0].data.push(item.cliques);
                });

                // Atualiza o gráfico
                myChart.update();
            } else {
                console.error('myChart.data ou myChart.data.labels é indefinido.');
            }
        })
        .catch(error => console.error('Erro ao obter dados do servidor:', error));
}

// Chama a função para obter dados do gráfico quando a página carrega
obterDadosGrafico();

// Adicione um temporizador para atualizar os dados do gráfico automaticamente (a cada 5 segundos, por exemplo)
setInterval(() => {
    console.log('Atualizando dados do gráfico...');
    obterDadosGrafico();
}, 5000);
