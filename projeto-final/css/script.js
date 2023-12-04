// script.js

// Supondo que você tenha alguma variável ou função que verifica se o usuário está autenticado como administrador
var isAdmin = true; // Defina isso com base na sua lógica de autenticação

// Esconde o link do relatório se o usuário não estiver autenticado como administrador
document.addEventListener("DOMContentLoaded", function () {
    if (!isAdmin) {
        var relatorioLink = document.getElementById('relatorio-link');
        if (relatorioLink) {
            relatorioLink.style.display = 'none';
        }
    }
});
