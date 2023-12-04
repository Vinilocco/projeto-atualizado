function showContent(sectionId) {
    // Adicione lógica aqui para mostrar ou ocultar o conteúdo da seção, se necessário

    // Envie uma solicitação para o servidor registrar o clique
    enviarRegistroDeClique(sectionId);
}

function enviarRegistroDeClique(secao) {
    // Ajuste o caminho do arquivo conforme necessário
    var url = 'registrar_clique.php';
    var params = new URLSearchParams();
    params.append('secao', secao);

    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: params,
    })
    .then(response => {
        if (!response.ok) {
            throw new Error('Erro ao enviar solicitação ao servidor');
        }
        return response.text();
    })
    .then(data => {
        console.log(data); // Pode ser útil para depuração
    })
    .catch(error => {
        console.error('Erro durante a solicitação ao servidor:', error);
    });
}
